<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DriversRequest;
use App\Driver;
use \Validator;


class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

  
          /**
     * * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    public function store(Request $request)
    {
        $data =[
            'name'=> $request->name,
            'city'=> $request->city,
        ];
        Driver::create($data);

        return redirect()->route('drivers.index');
        // return view('radars.index', compact('radars'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver= Driver::find($id);
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request ->all());
        $driver=Driver::find($id);

        $data =[
            'driverId'=> $request->driverId,
            'name'=> $request->name,
            'city'=> $request->city,
        ];
        $driver->update($data);

        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Driver::find($id)->delete();
        return redirect()->route('drivers.index');
    }
}

    public function restore($id)
    {
        Driver::onlyTrashed()->find($id)->restore();
        return redirect()->route('drivers.index');
    }
}