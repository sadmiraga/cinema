<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    //user

    //dat foreign key Watchingu
    public function watching()
    {
        return $this->hasMany(watching::class);
    }
}
