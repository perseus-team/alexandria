<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        "title", "isbn", "cover"
    ];

    function authors() {
        return $this->belongsToMany(Author::class);
    }

    function physicalCopies() {
        return $this->hasMany(PhysicalCopy::class);
    }

}
