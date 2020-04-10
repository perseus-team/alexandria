<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    function books() {
        return $this->belongsToMany(Book::class);
    }
    protected $fillable = [
        "name", "bio", "photo"
    ];
}
