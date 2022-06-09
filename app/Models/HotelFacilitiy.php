<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelFacilitiy extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
