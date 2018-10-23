<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Service;
use View;
use Input;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return View::make('services.index')
            ->with('services', $services);
    }

    public function index_admin()
    {
        $services = Service::all();

        return View::make('services.admin_index')
            ->with('services', $services);
    }

    public function show($id)
    {
        $service = Service::find($id);
        $services = Service::all();

        return View::make('services.show')
            ->with('service', $service)
            ->with('services', $services);
    }

    public function create()
    {
        return View::make('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $service = new Service;
        $service->name       = Input::get('name');
        $service->icon     = Input::get('icon');
        $service->description     = Input::get('description');
        $service->long_desc = Input::get('long_desc');
        $service->img_detail         = Input::get('img_detail');
        $service->save();

        return Redirect::to('/admin/services');
    }

    public function edit($id)
    {
        $service = Service::find($id);

        return View::make('services.edit')
            ->with('service', $service);
    }

    public function update($id)
    {
        $service = Service::find($id);
        $service->name          = Input::get('name');
        $service->icon          = Input::get('icon');
        $service->description   = Input::get('description');
        $service->long_desc     = Input::get('long_desc');
        $service->img_detail    = Input::get('img_detail');
        $service->save();


        return Redirect::to('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return Redirect::to('/admin/services');
    }
}
