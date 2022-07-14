<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    use HasFactory;

    use HasRecursiveRelationships;



}
