<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Category;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Flash;

class GalleryController extends AppBaseController
{
    /** @var GalleryRepository $galleryRepository*/
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     */
    public function index(Request $request)
    {
        $galleries = $this->galleryRepository->paginate(10);

        return view('admin.galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new Gallery.
     */
    public function create()
    {
        $categories = Category::pluck('name_ar', 'id');

        return view('admin.galleries.create', compact('categories'));
    }

    /**
     * Store a newly created Gallery in storage.
     */
    public function store(CreateGalleryRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/galleries');
            $input[$file] = $path;
        }

        $gallery = $this->galleryRepository->create($input);

        Flash::success('Gallery saved successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Display the specified Gallery.
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('admin.galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->find($id);
        $categories = Category::pluck('name_ar', 'id');

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('admin.galleries.edit')
            ->with('gallery', $gallery)
            ->with('categories', $categories)
            ;
    }

    /**
     * Update the specified Gallery in storage.
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/galleries');
            $input[$file] = $path;
        }


        $gallery = $this->galleryRepository->update($input, $id);

        Flash::success('Gallery updated successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $this->galleryRepository->delete($id);

        Flash::success('Gallery deleted successfully.');

        return redirect(route('galleries.index'));
    }
}
