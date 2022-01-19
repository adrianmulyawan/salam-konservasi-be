<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionEquipmentDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaction_equipment_details';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
