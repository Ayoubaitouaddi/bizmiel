<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackItem extends Model
{
    protected $fillable = ['pack_id', 'product_id', 'quantity', 'size'];

    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}