<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use App\Models\Equipment;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    public function show(int $id)
    {
        $data = Fault::find($id);
        if ($data)
        {
            $equipment = $data->equipment;
            return view('faults.show')->with(['fault' => $data, 'equipment' => $equipment]);
        }
        else
            return redirect('/')->with(['status' => 'Не прогрузилась эта хрень']);

    }

    public function create(int $equipmentId)
    {
        $equipment = Equipment::whereAny(['id'], '=', $equipmentId)->first();
        if ($equipment == null)
            view('/');


        return view('faults.create')->with(['equipment' => $equipment]);
    }

    public function store(Request $request)
    {

        $data = $request->validate(['equipment_Id' => 'required',
                                    'title' => 'required',
                                    'description' => 'required']);
        
        $id = Fault::insertGetId($data);
        return $this->show($id);
    }

    public function delete(int $id)
    {
        $record = Fault::find($id);
        if ($record)
            $record->delete();
        return redirect('/');
    }
}
