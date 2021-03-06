<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemmonhoc extends Model
{
    protected $primaryKey = 'MaDiemMH';
    protected $fillable = ['MaHocSinh','MaMonHoc','NamHoc','HocKy','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK'];
    public function hocsinh()
    {
        return $this->belongsTo(Hocsinh::class);
    }
    public function monhoc()
    {
        return $this->belongsTo(Monhoc::class);
    }
}
