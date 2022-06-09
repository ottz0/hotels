<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelFacility extends Model
{
    protected $fillable = ['hotel_id', 'fitness_centre', 'bar', 'swimming_pool', 'parking', 'free_wifi'];

    use HasFactory;

    public $timestamps = false;

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
