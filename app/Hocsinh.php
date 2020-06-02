<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hocsinh extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'MaHocSinh';
    public function diemmonhocs()
    {
        return $this->hasMany(Diemmonhoc::class);
    }
    public function lophocs()
    {
        return $this->belongsToMany(Lophoc::class);
    }
    public function diemhocsinhs()
    {
        return $this->hasMany(Diemhocsinh::class);
    }
}
