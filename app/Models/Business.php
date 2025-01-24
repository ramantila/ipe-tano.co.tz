<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable=[
       'business_name'
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function services(){

        return $this->hasMany(Service::class);
        
    }

    public function products(){

        return $this->hasMany(Product::class);
        
    }

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function country(){

        return $this->belongsTo(Country::class);

    }

    public function reviews(){

        return $this->hasMany(BusinessReview::class)->where('status', 1);
        
    }

    public function rating(){

        return $this->hasMany(Rating::class);
        
    }
}


