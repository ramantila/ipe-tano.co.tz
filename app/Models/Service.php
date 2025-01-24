<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function business(){
        return $this->belongsTo(Business::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function serviceReview(){

        return $this->hasMany(ServiceReview::class)->where('status', 1);
        // return $this->hasMany(ServiceReview::class)->where('status', 1);
        // return $this->hasMany(ProductReview::class);
        
    }
}

