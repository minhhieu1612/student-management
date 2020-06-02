<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemhocsinh extends Model
{
    public function hocsinh()
    {
        return $this->belongsTo(Hocsinh::class);
    }
}
