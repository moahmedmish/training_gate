<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreatePhotoSettingRequest;
use App\Http\Requests\UpdatePhotoSettingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PhotoSettingRepository;
use Illuminate\Http\Request;
use Flash;

class PhotoSettingController extends AppBaseController
{
    /** @var PhotoSettingRepository $photoSettingRepository*/
    private $photoSettingRepository;

    public function __construct(PhotoSettingRepository $photoSettingRepo)
    {
        $this->photoSettingRepository = $photoSettingRepo;
    }

    /**
     * Display a listing of the PhotoSetting.
     */
    public function index(Request $request)
    {
        $photoSettings = $this->photoSettingRepository->paginate(10);

        return view('admin.photo_settings.index')
            ->with('photoSettings', $photoSettings);
    }

    /**
     * Show the form for creating a new PhotoSetting.
     */
    public function create()
    {
        return view('admin.photo_settings.create');
    }

    /**
     * Store a newly created PhotoSetting in storage.
     */
    public function store(CreatePhotoSettingRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/photo_settings');
            $input[$file] = $path;
        }

        $photoSetting = $this->photoSettingRepository->create($input);

        Flash::success('Photo Setting saved successfully.');

        return redirect(route('photo-settings.index'));
    }

    /**
     * Display the specified PhotoSetting.
     */
    public function show($id)
    {
        $photoSetting = $this->photoSettingRepository->find($id);

        if (empty($photoSetting)) {
            Flash::error('Photo Setting not found');

            return redirect(route('photo-settings.index'));
        }

        return view('admin.photo_settings.show')->with('photoSetting', $photoSetting);
    }

    /**
     * Show the form for editing the specified PhotoSetting.
     */
    public function edit($id)
    {
        $photoSetting = $this->photoSettingRepository->find($id);

        if (empty($photoSetting)) {
            Flash::error('Photo Setting not found');

            return redirect(route('photo-settings.index'));
        }

        return view('admin.photo_settings.edit')->with('photoSetting', $photoSetting);
    }

    /**
     * Update the specified PhotoSetting in storage.
     */
    public function update($id, UpdatePhotoSettingRequest $request)
    {
        $photoSetting = $this->photoSettingRepository->find($id);

        if (empty($photoSetting)) {
            Flash::error('Photo Setting not found');

            return redirect(route('photo-settings.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/photo_settings');
            $input[$file] = $path;
        }


        $photoSetting = $this->photoSettingRepository->update($input, $id);

        Flash::success('Photo Setting updated successfully.');

        return redirect(route('photo-settings.index'));
    }

    /**
     * Remove the specified PhotoSetting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $photoSetting = $this->photoSettingRepository->find($id);

        if (empty($photoSetting)) {
            Flash::error('Photo Setting not found');

            return redirect(route('photo-settings.index'));
        }

        $this->photoSettingRepository->delete($id);

        Flash::success('Photo Setting deleted successfully.');

        return redirect(route('photo-settings.index'));
    }
}
