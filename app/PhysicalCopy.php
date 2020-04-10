<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalCopy extends Model
{

    protected $fillable = [
        "book_id", "location", "notes"
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function book() {
        return $this->belongsTo(Book::class);
    }

}
