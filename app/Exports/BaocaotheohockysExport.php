<?php

namespace App\Exports;

use App\Lophoc;
use App\Monhoc;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BaocaotheohockysExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($namhoc, $hocky)
    {
        $this->namhoc = $namhoc;
        $this->hocky = $hocky;
    }

    public function view() : View
    {
        $namhoc = $this->namhoc;
        $hocky = $this->hocky;
        $diemdat = DB::table('thamsos')->value('DiemDat');
        $lops = Lophoc::where('NamHoc', $namhoc)->get();
        $solop = $lops->count();
        $dats = array_fill(0,$solop,0);
        $somon = Monhoc::all()->count();

        foreach($lops as $index => $lop)
        {
            $diems = DB::table('hocsinhs')
            ->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')
            ->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')
            ->join('diemmonhocs','hocsinhs.MaHocSinh','diemmonhocs.MaHocSinh')
            ->selectRaw('hocsinhs.MaHocSinh, sum(DiemTongHK) as TongDiem')
            ->where([['lophocs.MaLopHoc', $lop->MaLopHoc],['HocKy', $hocky],['lophocs.NamHoc', $namhoc]])
            ->groupBy('hocsinhs.MaHocSinh')
            ->get();

            foreach($diems as $diem)
            {
                if($diem->TongDiem / $somon >= $diemdat)
                {
                    $dats[$index] += 1;
                }
            }
        }

        return view('baocaos.exportBySemester', compact('hocky', 'namhoc', 'lops', 'dats'));
    }
}
