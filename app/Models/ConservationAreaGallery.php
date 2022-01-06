<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationAreaGallery extends Model
{
    use HasFactory;

    protected $table = 'conservation_area_galleries';

    protected $fillable = [
        'conservation_area_id', 'photo'
    ];

    protected $hidden = [];

    // Relasi ke table conservation_areas
    public function conservation_area()
    {
        return $this->belongsTo(ConservationArea::class,'conservation_area_id', 'id');
    }
}
