<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderMember extends Model
{
    protected $table = 'order_members';
    protected $fillable = [
        'order_id',
        'user_id',
        'amount',
        'settled_amount'
    ];
    use HasFactory;
    use SoftDeletes;
}