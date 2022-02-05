<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transactions';

    protected $fillable = [
        'permit_application_fee',
        'visitor_charges',
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

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function transaction_equipment_details()
    {
        return $this->hasMany(TransactionEquipmentDetail::class);
    }

    public function visitor_control()
    {
        return $this->hasOne(VisitorControl::class);
    }
}
