<?php

namespace App\Http\Controllers;

use App\Models\Fault;
use App\Models\Equipment;
use App\Models\FaultImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $index = 1;

        $id = Fault::insertGetId($data);

        while($request->file('image'.$index))
        {
            $file = $request->file('image'.$index);
            Storage::disk('public_images')->put('', $file);

            FaultImage::insert(["fault_id" => $id, "image_path" => "/images".$file->hashName()]);

            $index++;
        }

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
