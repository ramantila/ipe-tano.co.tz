<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends EloquentUser
{
    use SoftDeletes;
    protected $fillable = [
        'email',
        'phone',
        'password',
        'first_name',
        'last_name', 
        'region_id',
        'gender',
        'dob',
        'createdby'
    ];

    public function businesses(){
        return $this->hasMany(Business::class);
    }

    public function reviews(){
        return $this->hasMany(BusinessReview::class);
    }
}
