<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $primaryKey = 'MaLopHoc';
    protected $guarded = [];
    public function hocsinhs()
    {
        return $this->belongsToMany('App\Hocsinh', 'hocsinh_lophoc', 'MaLopHoc', 'MaHocSinh');
    }
}
