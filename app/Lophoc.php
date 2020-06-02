<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    public function hocsinhs()
    {
        return $this->belongsToMany(Hocsinh::class);
    }
}
