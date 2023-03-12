<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable=[
        'firstName','lastName','mobileNo'
    ];
    
    public function roles()
    {
        return $this->belongsToMany(Member::class, 'member_roles');
    }
}
