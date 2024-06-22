<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    public function show(int $id)
    {
        $data = Fault::find($id)->first();
        $equipment = $data->equipment;

        return view('faults.show')->with(['fault' => $data, 'equipment' => $equipment]);
    }
}
