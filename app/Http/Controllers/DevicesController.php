<?php

namespace App\Http\Controllers;

use App\Models\devices;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $datos['devices']=devices::all();
        return view('devices.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //$datosDevices = request()->all();
       $datosDevices = request()->except('_token');
    
       devices::create($datosDevices);
       return redirect('devices');
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $devices=devices::findOrFail($id);
        return view('devices.show', compact('devices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $devices=devices::findOrFail($id);
        return view('devices.edit', compact('devices'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $datosDevices = request()->except('_token','_method');
        devices::where('id','=',$id)->update($datosDevices);
         $devices=devices::findOrFail($id);
        //return view('devices.edit', compact('devices'));
        return redirect('devices');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        devices::destroy($id);
        return redirect('devices');
    }
}
