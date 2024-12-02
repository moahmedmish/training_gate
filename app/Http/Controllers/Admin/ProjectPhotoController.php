<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateProjectPhotoRequest;
use App\Http\Requests\UpdateProjectPhotoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProjectPhotoRepository;
use Illuminate\Http\Request;
use Flash;

class ProjectPhotoController extends AppBaseController
{
    /** @var ProjectPhotoRepository $projectPhotoRepository*/
    private $projectPhotoRepository;

    public function __construct(ProjectPhotoRepository $projectPhotoRepo)
    {
        $this->projectPhotoRepository = $projectPhotoRepo;
    }

    /**
     * Display a listing of the ProjectPhoto.
     */
    public function index(Request $request)
    {
        if ($request->get('project_id')){

            $projectPhotos = $this->projectPhotoRepository->all(['project_id' => $request->get('project_id')]);
        }else{
            $projectPhotos = $this->projectPhotoRepository->paginate(10);
        }

        return view('admin.project_photos.index')
            ->with('projectPhotos', $projectPhotos);
    }

    /**
     * Show the form for creating a new ProjectPhoto.
     */
    public function create()
    {
        return view('admin.project_photos.create');
    }

    /**
     * Store a newly created ProjectPhoto in storage.
     */
    public function store(CreateProjectPhotoRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/project-photos');
            $input[$file] = $path;
        }

        $projectPhoto = $this->projectPhotoRepository->create($input);

        Flash::success('Project Photo saved successfully.');

        return redirect(route('project-photos.index'));
    }

    /**
     * Display the specified ProjectPhoto.
     */
    public function show($id)
    {
        $projectPhoto = $this->projectPhotoRepository->find($id);

        if (empty($projectPhoto)) {
            Flash::error('Project Photo not found');

            return redirect(route('project-photos.index'));
        }

        return view('admin.project_photos.show')->with('projectPhoto', $projectPhoto);
    }

    /**
     * Show the form for editing the specified ProjectPhoto.
     */
    public function edit($id)
    {
        $projectPhoto = $this->projectPhotoRepository->find($id);

        if (empty($projectPhoto)) {
            Flash::error('Project Photo not found');

            return redirect(route('project-photos.index'));
        }

        return view('admin.project_photos.edit')->with('projectPhoto', $projectPhoto);
    }

    /**
     * Update the specified ProjectPhoto in storage.
     */
    public function update($id, UpdateProjectPhotoRequest $request)
    {
        $projectPhoto = $this->projectPhotoRepository->find($id);

        if (empty($projectPhoto)) {
            Flash::error('Project Photo not found');

            return redirect(route('project-photos.index'));
        }
        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/pages');
            $input[$file] = $path;
        }


        $projectPhoto = $this->projectPhotoRepository->update($input, $id);

        Flash::success('Project Photo updated successfully.');

        return redirect(route('project-photos.index'));
    }

    /**
     * Remove the specified ProjectPhoto from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $projectPhoto = $this->projectPhotoRepository->find($id);

        if (empty($projectPhoto)) {
            Flash::error('Project Photo not found');

            return redirect(route('project-photos.index'));
        }

        $this->projectPhotoRepository->delete($id);

        Flash::success('Project Photo deleted successfully.');

        return redirect(route('project-photos.index'));
    }
}
