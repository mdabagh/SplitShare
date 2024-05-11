<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    use SoftDeletes;
     
    protected $table = 'transactions';

    protected $fillable = [
        'payer_id',
        'receiver_id',
        'amount',
        'order_member_id',
        'paid_at'
    ];

    public function payer()
    {
        return $this->belongsTo(User::class, 'payer_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function orderMember()
    {
        return $this->belongsTo(OrderMember::class, 'order_member_id');
    }
}