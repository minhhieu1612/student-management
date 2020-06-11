<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemmonhoc extends Model
{
    protected $primaryKey = 'MaDiemMH';
    public function hocsinh()
    {
        return $this->belongsTo(Hocsinh::class);
    }
    public function monhoc()
    {
        return $this->belongsTo(Monhoc::class);
    }
}
