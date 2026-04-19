<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    public function items()
    {
        return $this->hasMany(PackItem::class);
    }
}