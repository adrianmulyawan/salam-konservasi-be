<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConservationArea extends Model
{
    use HasFactory;

    protected $table = 'conservation_areas';

    protected $fillable = [
        'user_id', 'name', 'slug', 'location', 'description', 
        'area', 'is_open', 'map', 'is_homestay', 'is_resto'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->hasMany(ConservationAreaGallery::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
