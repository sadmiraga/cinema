<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class watching extends Model
{
    //support jer je ovog vise

    public function movies()
    {
        return $this->belongsTo(movies::class);
    }
}
