<?php

namespace App\Http\Controllers;

use App\Slide;
use View;
use Input;
use Illuminate\Support\Facades\Redirect;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();

        return View::make('slides.index')
            ->with('slides', $slides);
    }

    public function create()
    {
        return View::make('slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $slide = new Slide;
        $slide->title       = Input::get('title');
        $slide->title_2     = Input::get('title_2');
        $slide->title_3     = Input::get('title_3');
        $slide->description = Input::get('description');
        $slide->img         = Input::get('img');
        $slide->save();

        return Redirect::to('/admin/slides');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);

        return View::make('slides.edit')
            ->with('slide', $slide);
    }

    public function update($id)
    {
        $slide = Slide::find($id);
        $slide->title       = Input::get('title');
        $slide->title_2     = Input::get('title_2');
        $slide->title_3     = Input::get('title_3');
        $slide->description = Input::get('description');
        $slide->img         = Input::get('img');
        $slide->save();

        $slide->save();


        return Redirect::to('/admin/slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();

        return Redirect::to('/admin/slides');
    }


}
