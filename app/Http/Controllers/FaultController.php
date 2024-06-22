<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use App\Models\Equipment;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    public function show(int $id)
    {
        $data = Fault::find($id)->first();
        $equipment = $data->equipment;

        return view('faults.show')->with(['fault' => $data, 'equipment' => $equipment]);
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
        $data = $this->validate($request,   ['equipmentId' => 'required',
                                            'title' => 'required',
                                            'description' => 'required']);
        $item = Fault::insert($data);
        
        return view('faults.show', $item->id);
    }
}
