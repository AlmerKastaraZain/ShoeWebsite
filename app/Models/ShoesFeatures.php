<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoesFeatures extends Model
{
    //
    use HasFactory;
    
    public $timestamps = false;

    

    public function Shoes(): BelongsTo
    {
        return $this->belongsTo(Shoes::class);
    }

    public function Features(): BelongsTo
    {
        return $this->belongsTo(related: Features::class);
    }

    protected $fillable = [
        'shoes_id',
        'features_id'
    ];
}
