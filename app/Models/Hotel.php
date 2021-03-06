<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['id', 'name', 'address', 'postcode', 'state', 'star_rating'];

    use HasFactory;

    public $timestamps = false;

    public function hotelCategories(){
        return $this->belongsTo('App\Models\HotelCategory');
    }

    public function hotelFacilities(){
        return $this->hasOne('App\Models\HotelFacility');
    }

    public function hotelReviews(){
        return $this->hasMany('App\Models\Review');
    }
}
