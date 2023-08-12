<?php

namespace App\Http\Controllers;

use App\Models\Bogi;
use App\Models\Station;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function trains() {
        $trains = Train::paginate(50);
        return view('train.index', ['trains' => $trains]);
    }

    public function editTrain($id) {
        $train = Train::findOrFail($id);
        return view('train.edit', ['train' => $train]);
    }

    public function deleteBogi($id){
        $bogi = Bogi::findOrFail($id);
        $bogi->delete();
        return back();
    }

    public function addTrain(){
        $stations = Station::all();
        return view('train.add', ['stations' => $stations]);
    }

    public function saveTrain(Request $request){
        $request->validate([
           'name' => 'required',
            'home_station_id' => 'required',
            'date' => 'required|date',
            'start_time' => 'required|time',
        ]);

        Train::create([
           'name' => $request->name,
           'home_station_id' => $request->home_station_id,
           'date' => $request->date,
           'start_time' => $request->start_time,
        ]);

        flash()->addInfo('Train added successfully');
        return redirect()->route('trains');
    }
}
