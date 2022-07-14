<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    use HasRecursiveRelationships;

    public $timestamps = false;
}
