<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = [
        'category_id',
        'name',
        'stok',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function transaction_detail()
    {
        return $this->hasMany(transaction_detail::class, 'item_id', 'id');
    }
}
