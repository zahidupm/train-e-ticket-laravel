<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function listStation(){
        $stations = Station::all();
        return view('station.index', ['stations' => $stations]);
    }

    public function addStation(){
        return view('station.add');
    }

    public function saveStation(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lon' => 'required',
        ]);

        Station::create([
           'name' => $request->name,
            'address' => $request->address,
            'lat' => $request->lat,
            'lon' => $request->lon,
        ]);

        flash()->addInfo('Station added successfully');
        return redirect()->route('list-stations');
    }
}
