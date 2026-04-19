<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // nullable (guest checkout)
        'customer_name',
        'phone',
        'city',
        'address',
        'total',
        'status',
    ];

    protected $casts = [
        'total' => 'decimal:2',
    ];

    /*
    |-----------------------------
    | RELATIONS
    |-----------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /*
    |-----------------------------
    | HELPERS (optional but useful)
    |-----------------------------
    */

    public function getItemsCountAttribute()
    {
        return $this->items->sum('quantity');
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function markAsConfirmed()
    {
        $this->update(['status' => 'confirmed']);
    }
}