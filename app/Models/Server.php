<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = ['id','category_id','title','slug'];

    use HasRecursiveRelationships;

    public $timestamps = false;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
