<?php


namespace App\Http\Controllers\Admin;

use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController
{
    public function __construct(private ClientService $clientService){}
    
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('admin.client.create', compact('clients'));
    }

    public function store(Request $request)
    {
           $this->clientService->store($request->all());
           return redirect()->route('client.index')->with('success', 'Client created successfully');
    }


    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.client.edit', compact('client'));
    }


    public function update($id, Request $request)
    {
        $this->clientService->update($id, $request->all());
        return redirect()->route('client.index')->with('success', 'Client updated successfully');
    }
    
    public function destroy($id)
    {
        $this->clientService->destroy($id);
        return redirect()->route('client.index')->with('success', 'Client deleted successfully');
    }
}