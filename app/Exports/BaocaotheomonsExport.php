<?php

namespace App\Exports;

use App\Lophoc;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BaocaotheomonsExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function __construct($tenmonhoc, $mamonhoc, $namhoc, $hocky)
    {
        $this->tenmonhoc = $tenmonhoc;
        $this->mamonhoc = $mamonhoc;
        $this->namhoc = $namhoc;
        $this->hocky = $hocky;
    }

    public function view() : View
    {
        $namhoc = $this->namhoc;
        $hocky = $this->hocky;
        $tenmonhoc = $this->tenmonhoc;
        $mamonhoc = $this->mamonhoc;
        $diemdat = DB::table('thamsos')->value('DiemDat');
        $lops = Lophoc::where('NamHoc', $namhoc)->get();
        $solop = $lops->count();
        $dats = array_fill(0,$solop,0);

        foreach($lops as $index => $lop)
        {
            $soluongdat = DB::table('hocsinhs')
            ->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')
            ->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')
            ->join('diemmonhocs','hocsinhs.MaHocSinh','diemmonhocs.MaHocSinh')
            ->select('lophocs.MaLopHoc AS MaLopHoc', 'hocsinhs.MaHocSinh AS MaHocSinh','HoVaTen','MaMonHoc','HocKy','lophocs.NamHoc AS NamHoc','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK')
            ->where([['lophocs.MaLopHoc', $lop->MaLopHoc],['MaMonHoc', $mamonhoc],['HocKy', $hocky],['lophocs.NamHoc', $namhoc],['DiemTongHK','>=',$diemdat]])
            ->count();
            $dats[$index] = $soluongdat;
        }
        

        return view('baocaos.exportBySubject', compact('hocky', 'namhoc', 'tenmonhoc', 'lops', 'dats'));
    }
}
