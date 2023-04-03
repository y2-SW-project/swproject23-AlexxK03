<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

    public function documentation(){
        return $this->belongsTo(Documentation::class);
    }

}
