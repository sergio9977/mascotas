<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fundacion;
use Illuminate\Http\Request;
use Session;

class FundacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fundacion = Fundacion::paginate(25);

        return view('fundacion.fundacion.index', compact('fundacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fundacion.fundacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Fundacion::create($requestData);

        Session::flash('flash_message', 'Fundacion added!');

        return redirect('fundacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $fundacion = Fundacion::findOrFail($id);

        return view('fundacion.fundacion.show', compact('fundacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $fundacion = Fundacion::findOrFail($id);

        return view('fundacion.fundacion.edit', compact('fundacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $fundacion = Fundacion::findOrFail($id);
        $fundacion->update($requestData);

        Session::flash('flash_message', 'Fundacion updated!');

        return redirect('fundacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Fundacion::destroy($id);

        Session::flash('flash_message', 'Fundacion deleted!');

        return redirect('fundacion');
    }
}
