<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function business(){

        return $this->belongsTo(Business::class);

    }

    public function businessreview(){

        return $this->belongsTo(BusinessReview::class);

    }
}
