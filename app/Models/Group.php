<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'creator_id',
        'default_currency',
        'default_calendar_type',
        'invite_link',
        'invite_expiry'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function groupMembers()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}