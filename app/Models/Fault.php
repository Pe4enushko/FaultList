<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fault extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = false;

    public function equipment() : BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }

    public function images() : HasMany
    {
        return $this->hasMany(FaultImage::class);
    }
}
