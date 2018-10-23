<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Client;
use App\Service;
use View;
use Input;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $services = Service::all();

        return View::make('clients.index')
            ->with('clients', $clients)
            ->with('services', $services);
    }

    public function index_admin()
    {
        $clients = Client::all();

        return View::make('clients.admin_index')
            ->with('clients', $clients);
    }

    public function create()
    {
        return View::make('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $client = new Client;
        $client->name           = Input::get('name');
        $client->img            = Input::get('img');
        $client->description    = Input::get('description');
        $client->save();

        return Redirect::to('/admin/clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);

        return View::make('clients.edit')
            ->with('client', $client);
    }

    public function update($id)
    {
        $client = Client::find($id);
        $client->name           = Input::get('name');
        $client->img            = Input::get('img');
        $client->description    = Input::get('description');
        $client->save();


        return Redirect::to('/admin/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return Redirect::to('/admin/clients');
    }
}

