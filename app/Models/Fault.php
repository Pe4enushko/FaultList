<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fault extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function equipment() : BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }
}
