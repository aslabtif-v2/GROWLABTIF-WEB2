<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    // primary key adalah id
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'total_price'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transaction_detail(){
        return $this->hasMany(Transaction_detail::class, 'transaction_id', 'id');
    }
}
