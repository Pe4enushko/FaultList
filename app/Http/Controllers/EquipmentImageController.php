<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use DateTime;
use Ramsey\Uuid\Guid\Guid;
use Illuminate\Support\Facades\Storage;

class EquipmentImageController extends Controller
{
    public function update(Request $request, int $id)
    {
        $file = $request->file('image');
        if (Storage::disk('public_images')->put('', $file))
        {
            $path = '/images/'.$file->hashName();

            $equipment = Equipment::find($id);
            $equipment->image_path = $path;
            $equipment->save();
            
            return redirect(route('equipment.show', $id));
        }
    }
}
