<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    protected $primaryKey = 'MaMonHoc';
    public function diemmonhocs()
    {
        return $this->hasMany(Diemmonhoc::class);
    }
}
