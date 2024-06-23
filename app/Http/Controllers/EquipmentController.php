<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Illuminate\Support\Facades\Storage;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() 
    {
        $data = Equipment::get();

        return view('equipment.index')->with('data', $data);
    }

    public function show(int $id) 
    {
        $data = Equipment::find($id);
        return view('equipment.show')->with(['item' => $data]);
    }

    public function delete(int $id)
    {
        $data = Equipment::find($id);
        if ($data)
            $data->delete();
        else
            return redirect('/')->with(['status' => 'Такого оборудования не знаю']);

        return redirect('/');
    }

    public function create() 
    {
        return view('equipment.create');
    }

    public function store(Request $request) 
    {
        $data = $request->validate(['title' => 'required', 'description' => 'required']);
        
        $file = $request->file('image');
        if (Storage::disk('public_images')->put('', $file) && isset($file))
        {
            $path = '/images/'.$file->hashName();
            
            $data['image_path'] = $path;
        }

        $id = Equipment::insertGetId($data);
        
        return redirect(route('equipment.show', $id));
    }
}
