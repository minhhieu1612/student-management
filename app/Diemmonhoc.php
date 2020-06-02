<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemmonhoc extends Model
{
    public function hocsinh()
    {
        return $this->belongsTo(Hocsinh::class);
    }
    public function monhoc()
    {
        return $this->belongsTo(Monhoc::class);
    }
}
