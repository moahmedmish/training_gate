<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Flash;

class SliderController extends AppBaseController
{
    /** @var SliderRepository $sliderRepository*/
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the Slider.
     */
    public function index(Request $request)
    {
        $sliders = $this->sliderRepository->paginate(10);

        return view('admin.sliders.index1')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Slider.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created Slider in storage.
     */
    public function store(CreateSliderRequest $request)
    {
        $input = $request->validated();

        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/sliders');
            $input[$file] = $path;
        }
        $slider = $this->sliderRepository->create($input);

        Flash::success('Slider saved successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified Slider.
     */
    public function show($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('admin.sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified Slider.
     */
    public function edit($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        return view('admin.sliders.edit1')->with('slider', $slider);
    }

    /**
     * Update the specified Slider in storage.
     */
    public function update($id, UpdateSliderRequest $request)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/sliders');
            $input[$file] = $path;
        }

        $slider = $this->sliderRepository->update($input, $id);

        Flash::success('Slider updated successfully.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('sliders.index'));
        }

        $this->sliderRepository->delete($id);

        Flash::success('Slider deleted successfully.');

        return redirect(route('sliders.index'));
    }
}
