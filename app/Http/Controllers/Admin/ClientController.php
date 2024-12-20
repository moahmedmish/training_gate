<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers\Helper;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;
use Flash;

class ClientController extends AppBaseController
{
    /** @var ClientRepository $clientRepository*/
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * Display a listing of the Client.
     */
    public function index(Request $request)
    {
        $clients = $this->clientRepository->paginate(10);

        return view('admin.clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new Client.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created Client in storage.
     */
    public function store(CreateClientRequest $request)
    {
        $input = $request->all();
        $files = $request->file();
        foreach($files as $file => $values) {
            $path = Helper::getFilePath($request->file($file), 'images/clients');
            $input[$file] = $path;
        }

        $client = $this->clientRepository->create($input);

        Flash::success('Client saved successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified Client.
     */
    public function show($id)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('admin.clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified Client.
     */
    public function edit($id)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('admin.clients.edit')->with('client', $client);
    }

    /**
     * Update the specified Client in storage.
     */
    public function update($id, UpdateClientRequest $request)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        $input = $request->all();
        $files = $request->file();
        if(empty($files))
            unset($input['image']);
        foreach($files as $file => $values){
            $path = Helper::getFilePath($request->file($file),'images/clients');
            $input[$file] = $path;
        }


        $client = $this->clientRepository->update($input, $id);

        Flash::success('Client updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified Client from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = $this->clientRepository->find($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        $this->clientRepository->delete($id);

        Flash::success('Client deleted successfully.');

        return redirect(route('clients.index'));
    }
}
