<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    use HasFactory;

    protected $table = 'purposes';

    protected $fillable = [
        'purpose_name', 'slug'
    ];

    protected $hidden = [

    ];

    // Relasi ke tabel master_prices
    public function master_prices()
    {
        return $this->hasMany(MasterPrice::class, 'purposes_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
