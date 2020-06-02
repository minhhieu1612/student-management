<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    public function diemmonhocs()
    {
        return $this->hasMany(Diemmonhoc::class);
    }
}
