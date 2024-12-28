<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubPageRequest;
use App\Http\Requests\UpdateSubPageRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SubPageRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Page;
use App\Models\SubPage;

class SubPageController extends AppBaseController
{
    /** @var SubPageRepository $subPageRepository */
    private $subPageRepository;

    public function __construct(SubPageRepository $subPageRepo)
    {
        $this->subPageRepository = $subPageRepo;
    }

    /**
     * Display a listing of the SubPage.
     */
    public function index($page_id)
    {
        $page = Page::findOrFail($page_id);
        $subPages = SubPage::where('page_id', $page_id)->get();
        return view('admin.sub_pages.index', compact('page', 'subPages'));
    }

    /**
     * Show the form for creating a new SubPage.
     */
    public function create($page_id)
    {
        // Find the page by ID
        $page = Page::findOrFail($page_id);
        
        // Pass the list of all pages to the view for the select field
        $pages = Page::all(); // Fetch all pages for the select dropdown
        
        // Return the view with the $page (the selected page) and $pages (all pages for the select)
        return view('admin.sub_pages.create', compact('page', 'pages'));
    }
    /**
     * Store a newly created SubPage in storage.
     */
    public function store($page_id, CreateSubPageRequest $request)
    {
        $input = $request->all();
        $input['page_id'] = $page_id;
        $subPage = $this->subPageRepository->create($input);
        Flash::success('Sub Page saved successfully.');
        return redirect(route('sub_pages.index', ['page_id' => $page_id]));
    }

    /**
     * Display the specified SubPage.
     */
    public function show($page_id, $id)
    {
        $subPage = $this->subPageRepository->find($id);
        if (empty($subPage) || $subPage->page_id != $page_id) {
            Flash::error('Sub Page not found');
            return redirect(route('sub_pages.index', ['page_id' => $page_id]));
        }
        return view('admin.sub_pages.show', compact('subPage'));
    }

    /**
     * Show the form for editing the specified SubPage.
     */
    public function edit($page_id, $id)
    {
        // Find the subPage by id using your repository
        $subPage = $this->subPageRepository->find($id);

        // If the subPage doesn't exist or doesn't belong to the page, show an error
        if (empty($subPage) || $subPage->page_id != $page_id) {
            Flash::error('Sub Page not found');
            return redirect(route('sub_pages.index', ['page_id' => $page_id]));
        }

        // Retrieve the Page object using the page_id
        $page = Page::findOrFail($page_id);

        // Retrieve all pages for the select dropdown
        $pages = Page::all();

        // Return the edit view with subPage, page, and pages
        return view('admin.sub_pages.edit', compact('subPage', 'page', 'pages'));
    }

    /**
     * Update the specified SubPage in storage.
     */
    public function update($page_id, $id, UpdateSubPageRequest $request)
    {
        $subPage = $this->subPageRepository->find($id);
        if (empty($subPage) || $subPage->page_id != $page_id) {
            Flash::error('Sub Page not found');
            return redirect(route('sub_pages.index', ['page_id' => $page_id]));
        }
        $input = $request->all();
        $input['page_id'] = $page_id;
        $subPage = $this->subPageRepository->update($input, $id);
        Flash::success('Sub Page updated successfully.');
        return redirect(route('sub_pages.index', ['page_id' => $page_id]));
    }

    /**
     * Remove the specified SubPage from storage.
     *
     * @throws \Exception
     */
    public function destroy($page_id, $id)
    {
        $subPage = $this->subPageRepository->find($id);
        if (empty($subPage) || $subPage->page_id != $page_id) {
            Flash::error('Sub Page not found');
            return redirect(route('sub_pages.index', ['page_id' => $page_id]));
        }
        $this->subPageRepository->delete($id);
        Flash::success('Sub Page deleted successfully.');
        return redirect(route('sub_pages.index', ['page_id' => $page_id]));
    }
}

