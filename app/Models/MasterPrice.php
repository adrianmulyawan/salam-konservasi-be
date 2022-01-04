<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPrice extends Model
{
    use HasFactory;

    protected $table = 'master_prices';

    protected $fillable = [
        'purpose_id', 'citizen', 'price'
    ];

    protected $hidden = [];

    // Relasi ke table purposes
    public function purpose()
    {
        return $this->belongsTo(Purpose::class, 'purpose_id', 'id');
    }
}
