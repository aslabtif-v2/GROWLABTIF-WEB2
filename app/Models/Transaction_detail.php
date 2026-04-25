<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    protected $fillable = [
        'transaction_id',
        'item_id',
        'qty',
        'total_price'
    ];

    public function item(){
        return $this->belongsTo(Item::class, 'item_id','id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
