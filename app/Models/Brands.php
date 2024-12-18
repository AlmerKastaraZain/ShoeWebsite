<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brands extends Model
{
    //
    use HasFactory;

    public $timestamps = false;

    public function ShoeCollections(): BelongsTo
    {
        return $this->belongsTo(ShoeCollections::class);
    }

    protected $fillable = [
        'brand',
        'shoe_collections_id'
    ];

}
