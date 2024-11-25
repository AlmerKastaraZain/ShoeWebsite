<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shoes extends Model
{
    //
    use HasFactory;
    public $timestamps = false;


    public function Brands(): BelongsTo
    {
        return $this->belongsTo(related: Brands::class);
    }
    
    protected $fillable = [
        'name',
        'brands_id',
        'price',
    ];
}
