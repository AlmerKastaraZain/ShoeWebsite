<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoesAvailabilitys extends Model
{
    //
    use HasFactory;

    public $timestamps = false;


    public function Shoes(): BelongsTo
    {
        return $this->belongsTo(Shoes::class);
    }

    public function ShoesSizes(): BelongsTo
    {
        return $this->belongsTo(related: ShoesSizes::class);
    }
    
    protected $fillable = [
        'shoes_id',
        'shoes_sizes_id',
        'quantity'
    ];
}
