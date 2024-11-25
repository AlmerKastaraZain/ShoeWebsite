<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attributes extends Model
{
    //
    use HasFactory;
    public $timestamps = false;


    public function Shoes(): BelongsTo
    {
        return $this->belongsTo(Shoes::class);
    }

    public function Sports(): BelongsTo
    {
        return $this->belongsTo(related: Sports::class);
    }
    
    protected $fillable = [
        'shoes_id',
        'for_male',
        'for_female',
        'for_kids',
        'sports_id',
    ];
}
