<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'user_id', 'conservation_area_id', 'title', 'slug',
        'event_date', 'photo', 'event_content'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function conservation_area()
    {
        return $this->belongsTo(ConservationArea::class, 'conservation_area_id', 'id');
    }
}
