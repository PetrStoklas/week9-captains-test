<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function captains()
    {
        return $this->belongsToMany('\App\Captain');
    }
}
