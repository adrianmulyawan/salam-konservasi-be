<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationArea extends Model
{
    use HasFactory;

    protected $table = 'conservation_areas';

    protected $fillable = [
        'user_id', 'master_price_id',
        'name', 'slug', 'location', 'description',
        'is_open', 'map', 'is_homestay', 'is_resto'
    ];

    protected $hidden = [

    ];
}
