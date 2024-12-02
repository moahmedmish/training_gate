<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateJoinRequest;
use App\Http\Requests\UpdateJoinRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\JoinRepository;
use Illuminate\Http\Request;
use Flash;

class JoinController extends AppBaseController
{
    /** @var JoinRepository $joinRepository*/
    private $joinRepository;

    public function __construct(JoinRepository $joinRepo)
    {
        $this->joinRepository = $joinRepo;
    }

    /**
     * Display a listing of the Join.
     */
    public function index(Request $request)
    {
        $joins = $this->joinRepository->paginate(10);

        return view('admin.joins.index')
            ->with('joins', $joins);
    }

    /**
     * Show the form for creating a new Join.
     */
    public function create()
    {
        return view('admin.joins.create');
    }

    /**
     * Store a newly created Join in storage.
     */
    public function store(CreateJoinRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        dd($files);
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/join');
            $input[$file] = $path;
        }

        $join = $this->joinRepository->create($input);

        Flash::success('Join saved successfully.');

        return redirect(route('joins.index'));
    }

    /**
     * Display the specified Join.
     */
    public function show($id)
    {
        $join = $this->joinRepository->find($id);

        if (empty($join)) {
            Flash::error('Join not found');

            return redirect(route('joins.index'));
        }

        return view('admin.joins.show')->with('join', $join);
    }

    /**
     * Show the form for editing the specified Join.
     */
    public function edit($id)
    {
        $join = $this->joinRepository->find($id);

        if (empty($join)) {
            Flash::error('Join not found');

            return redirect(route('joins.index'));
        }

        return view('admin.joins.edit')->with('join', $join);
    }

    /**
     * Update the specified Join in storage.
     */
    public function update($id, UpdateJoinRequest $request)
    {
        $join = $this->joinRepository->find($id);

        if (empty($join)) {
            Flash::error('Join not found');

            return redirect(route('joins.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/join');
            $input[$file] = $path;
        }

        $join = $this->joinRepository->update($input, $id);

        Flash::success('Join updated successfully.');

        return redirect(route('joins.index'));
    }

    /**
     * Remove the specified Join from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $join = $this->joinRepository->find($id);

        if (empty($join)) {
            Flash::error('Join not found');

            return redirect(route('joins.index'));
        }

        $this->joinRepository->delete($id);

        Flash::success('Join deleted successfully.');

        return redirect(route('joins.index'));
    }
}
