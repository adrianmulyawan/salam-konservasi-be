<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'transaction_code',
        'total_transaction'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function conservation_area()
    {
        return $this->belongsTo(ConservationArea::class);
    }

    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }

    public function galleries()
    {
        return $this->hasMany(ConservationAreaGallery::class);
    }
}
