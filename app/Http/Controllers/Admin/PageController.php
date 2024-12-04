<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Page;

class PageController extends AppBaseController
{
    /** @var PageRepository $pageRepository*/
    private $pageRepository;

    public function __construct(PageRepository $pageRepo)
    {
        $this->pageRepository = $pageRepo;
    }

    /**
     * Display a listing of the Page.
     */
    public function index(Request $request)
    {
        $pages = $this->pageRepository->paginate(10);

        // Lazy eager load the parent relationship
        $pages->load('parent');

        return view('admin.pages.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new Page.
     */
    public function create()
    {
        $pages = Page::all();
        $pagesArray = [];
        foreach ($pages as $page) {
            $pagesArray[$page->id] = $page->title_ar . ' - ' . $page->title_en;
        }
        return view('admin.pages.create', compact('pagesArray'));
    }

    /**
     * Store a newly created Page in storage.
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/pages');
            $input[$file] = $path;
        }


        $page = $this->pageRepository->create($input);

        Flash::success('Page saved successfully.');

        return redirect(route('pages.index'));
    }

    /**
     * Display the specified Page.
     */
    public function show($id)
    {
        $page = $this->pageRepository->find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        return view('admin.pages.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified Page.
     */
    public function edit($id)
    {
        $page = $this->pageRepository->find($id);
        $pages = Page::all(); // Get all pages
        $pagesArray = [];
        foreach ($pages as $pageItem) {
            $pagesArray[$pageItem->id] = $pageItem->title_ar . ' - ' . $pageItem->title_en;
        }
    
        if (empty($page)) {
            Flash::error('Page not found');
    
            return redirect(route('pages.index'));
        }
    
        return view('admin.pages.edit')->with('page', $page)->with('pagesArray', $pagesArray);
    }

    /**
     * Update the specified Page in storage.
     */
    public function update($id, UpdatePageRequest $request)
    {
        $page = $this->pageRepository->find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/pages');
            $input[$file] = $path;
        }


        $page = $this->pageRepository->update($input, $id);

        Flash::success('Page updated successfully.');

        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $page = $this->pageRepository->find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        $this->pageRepository->delete($id);

        Flash::success('Page deleted successfully.');

        return redirect(route('pages.index'));
    }
}
