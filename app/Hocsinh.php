<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hocsinh extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'MaHocSinh';
    public function diemmonhocs()
    {
        return $this->hasMany('App\Diemmonhoc', 'MaHocSinh');
    }
    public function lophocs()
    {
        return $this->belongsToMany('App\Lophoc', 'hocsinh_lophoc', 'MaHocSinh', 'MaLopHoc');
    }
    public function diemhocsinhs()
    {
        return $this->hasMany(Diemhocsinh::class, 'MaHocSinh');
    }
}
