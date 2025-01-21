<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSectionTypeRequest;
use App\Http\Requests\UpdateSectionTypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SectionTypeRepository;
use Illuminate\Http\Request;
use Flash;

class SectionTypeController extends AppBaseController
{
    /** @var SectionTypeRepository $sectionTypeRepository*/
    private $sectionTypeRepository;

    public function __construct(SectionTypeRepository $sectionTypeRepo)
    {
        $this->sectionTypeRepository = $sectionTypeRepo;
    }

    /**
     * Display a listing of the SectionType.
     */
    public function index(Request $request)
    {
        $sectionTypes = $this->sectionTypeRepository->paginate(10);

        return view('admin.section_types.index')
            ->with('sectionTypes', $sectionTypes);
    }

    /**
     * Show the form for creating a new SectionType.
     */
    public function create()
    {
        return view('admin.section_types.create');
    }

    /**
     * Store a newly created SectionType in storage.
     */
    public function store(CreateSectionTypeRequest $request)
    {
        $input = $request->all();

        $sectionType = $this->sectionTypeRepository->create($input);

        Flash::success('Section Type saved successfully.');

        return redirect(route('sectionTypes.index'));
    }

    /**
     * Display the specified SectionType.
     */
    public function show($id)
    {
        $sectionType = $this->sectionTypeRepository->find($id);

        if (empty($sectionType)) {
            Flash::error('Section Type not found');

            return redirect(route('sectionTypes.index'));
        }

        return view('admin.section_types.show')->with('sectionType', $sectionType);
    }

    /**
     * Show the form for editing the specified SectionType.
     */
    public function edit($id)
    {
        $sectionType = $this->sectionTypeRepository->find($id);

        if (empty($sectionType)) {
            Flash::error('Section Type not found');

            return redirect(route('sectionTypes.index'));
        }

        return view('admin.section_types.edit')->with('sectionType', $sectionType);
    }

    /**
     * Update the specified SectionType in storage.
     */
    public function update($id, UpdateSectionTypeRequest $request)
    {
        $sectionType = $this->sectionTypeRepository->find($id);

        if (empty($sectionType)) {
            Flash::error('Section Type not found');

            return redirect(route('sectionTypes.index'));
        }

        $sectionType = $this->sectionTypeRepository->update($request->all(), $id);

        Flash::success('Section Type updated successfully.');

        return redirect(route('sectionTypes.index'));
    }

    /**
     * Remove the specified SectionType from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sectionType = $this->sectionTypeRepository->find($id);

        if (empty($sectionType)) {
            Flash::error('Section Type not found');

            return redirect(route('sectionTypes.index'));
        }

        $this->sectionTypeRepository->delete($id);

        Flash::success('Section Type deleted successfully.');

        return redirect(route('sectionTypes.index'));
    }
}
