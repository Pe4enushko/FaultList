<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaultImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = false;
    protected $tableName = "fault_images"; 
}
