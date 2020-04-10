<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicalCopy extends Model
{

    function user() {
        return $this->belongsTo(User::class);
    }

    function book() {
        return $this->belongsTo(Book::class);
    }

}
