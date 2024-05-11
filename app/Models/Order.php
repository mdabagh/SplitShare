<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'title',
        'description',
        'group_id',
        'creator_id',
        'total_amount'
    ];
    use HasFactory;
    use SoftDeletes;

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function orderMembers()
    {
        return $this->hasMany(OrderMember::class);
    }
}