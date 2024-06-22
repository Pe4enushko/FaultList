<?php

namespace App\Models;

use GuzzleHttp\Middleware;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $guarded = false;
    protected $fillable = [
        '*'
    ];

    public function faults()
    {
        return $this->hasMany(Fault::class);
    }
}
