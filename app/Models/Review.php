<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['hotel_id', 'date_of_stay', 'review'];

    use HasFactory;

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
