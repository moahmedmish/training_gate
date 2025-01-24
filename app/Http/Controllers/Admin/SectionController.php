<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SectionRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Page;
use App\Models\SubPage;
use App\Models\Section;
use App\Models\SectionType;

class SectionController extends AppBaseController
{
    /** @var SectionRepository $sectionRepository */
    private $sectionRepository;

    public function __construct(SectionRepository $sectionRepo)
    {
        $this->sectionRepository = $sectionRepo;
    }

    /**
     * Display a listing of the Section.
     */
    public function index($page_id, $sub_page_id)
    {
        $page = Page::findOrFail($page_id);
        $subPage = SubPage::where('page_id', $page_id)->where('id', $sub_page_id)->firstOrFail();
        $sections = Section::where('sub_page_id', $sub_page_id)->get();
        return view('admin.sections.index', compact('page', 'subPage', 'sections'));
    }

    /**
     * Show the form for creating a new Section.
     */
    public function create($page_id, $sub_page_id)
    {
        $page = Page::findOrFail($page_id);
        $subPage = SubPage::findOrFail($sub_page_id);
        $sectionTypes = SectionType::all(); // Fetch all section types

        return view('admin.sections.create', compact('page', 'subPage', 'sectionTypes'));
    }

    /**
     * Store a newly created Section in storage.
     */
    public function store($page_id, $sub_page_id, CreateSectionRequest $request)
    {
        $input = $request->all();
    
        // Set page_id and sub_page_id
        $input['page_id'] = $page_id;
        $input['sub_page_id'] = $sub_page_id;
    
        // Handle the image upload
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $hash = substr(md5(time() . $originalName), 0, 10); // Generate a unique hash
            $extension = $file->getClientOriginalExtension();
    
            // Construct the file name and path
            $fileName = "{$originalName}_{$hash}.{$extension}";
            $filePath = "images/sections/{$fileName}";
    
            // Save the file to storage
            $file->move(public_path('images/sections'), $fileName);
    
            // Update the input array with the file path
            $input['image_path'] = $filePath;
        }
    
        // Create the section
        $section = $this->sectionRepository->create($input);
    
        Flash::success('Section saved successfully.');
    
        // Redirect back to the sections index
        return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
    }

    /**
     * Display the specified Section.
     */
    public function show($page_id, $sub_page_id, $id)
    {
        $section = $this->sectionRepository->find($id);
        if (empty($section) || $section->sub_page_id != $sub_page_id) {
            Flash::error('Section not found');
            return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
        }
        return view('admin.sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified Section.
     */
    public function edit($page_id, $sub_page_id, $id)
    {
        // Fetch the section to edit
        $section = $this->sectionRepository->find($id);
        if (empty($section) || $section->sub_page_id != $sub_page_id) {
            Flash::error('Section not found');
            return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
        }

        // Fetch related page and sub-page
        $page = Page::findOrFail($page_id);
        $subPage = SubPage::findOrFail($sub_page_id);

        // Fetch section types as key-value pairs (id => name)
        $sectionTypes = SectionType::pluck('name', 'id');

        // Pass data to the view
        return view('admin.sections.edit', compact('section', 'page', 'subPage', 'sectionTypes'));
    }


    /**
     * Update the specified Section in storage.
     */
    public function update($page_id, $sub_page_id, $id, UpdateSectionRequest $request)
    {
        $section = $this->sectionRepository->find($id);
        if (empty($section) || $section->sub_page_id != $sub_page_id) {
            Flash::error('Section not found');
            return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
        }
    
        $input = $request->all();
        $input['page_id'] = $page_id;
        $input['sub_page_id'] = $sub_page_id;
    
        // Handle image upload if an image is provided
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if (!empty($section->image_path) && file_exists(public_path($section->image_path))) {
                unlink(public_path($section->image_path)); // Delete old image
            }
    
            // Handle the new image upload
            $file = $request->file('image_path');
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $hash = substr(md5(time() . $originalName), 0, 10); // Generate a unique hash
            $extension = $file->getClientOriginalExtension();
    
            // Construct the file name and path
            $fileName = "{$originalName}_{$hash}.{$extension}";
            $filePath = "images/sections/{$fileName}";
    
            // Save the new file to storage
            $file->move(public_path('images/sections'), $fileName);
    
            // Update the input array with the new file path
            $input['image_path'] = $filePath;
        }
    
        // Update the section with the new data, including the new image path
        $this->sectionRepository->update($input, $id);
        
        Flash::success('Section updated successfully.');
        return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
    }

    /**
     * Remove the specified Section from storage.
     *
     * @throws \Exception
     */
    public function destroy($page_id, $sub_page_id, $id)
    {
        $section = $this->sectionRepository->find($id);
        if (empty($section) || $section->sub_page_id != $sub_page_id) {
            Flash::error('Section not found');
            return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
        }

        $this->sectionRepository->delete($id);
        Flash::success('Section deleted successfully.');
        return redirect(route('sections.index', ['page_id' => $page_id, 'sub_page_id' => $sub_page_id]));
    }
}
