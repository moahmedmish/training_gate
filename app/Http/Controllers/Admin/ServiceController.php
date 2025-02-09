<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Flash;

class ServiceController extends AppBaseController
{
    /** @var ServiceRepository $serviceRepository*/
    private $serviceRepository;

    public function __construct(ServiceRepository $serviceRepo)
    {
        $this->serviceRepository = $serviceRepo;
    }

    /**
     * Display a listing of the Service.
     */
    public function index(Request $request)
    {
        $services = $this->serviceRepository->paginate(10);

        return view('admin.services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new Service.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created Service in storage.
     */
    public function store(CreateServiceRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/services');
            $input[$file] = $path;
        }

        $service = $this->serviceRepository->create($input);

        Flash::success('Service saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified Service.
     */
    public function show($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        return view('admin.services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified Service.
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        return view('admin.services.edit')->with('service', $service);
    }

    /**
     * Update the specified Service in storage.
     */
    public function update($id, UpdateServiceRequest $request)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }
        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/services');
            $input[$file] = $path;
        }

        $service = $this->serviceRepository->update($input, $id);

        Flash::success('Service updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Service deleted successfully.');

        return redirect(route('services.index'));
    }
}
