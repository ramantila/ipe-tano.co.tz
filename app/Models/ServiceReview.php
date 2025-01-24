<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceReview extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function services(){
        return $this->belongsTo(Service::class, 'service_id');
        // return $this->belongsTo(Service::class, 'service_id')->with('status',1);
    }
}
