<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['id', 'name', 'address', 'postcode', 'state', 'star_rating'];

    use HasFactory;

    public $timestamps = false;

    public function facility(){
        return $this->hasOne('App\Models\Facility');
    }


}
