<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monhoc;
use App\Lophoc;
use Illuminate\Support\Facades\DB;

class BaocaoController extends Controller
{
    public function bySubject()
    {
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();
        return view('baocaos.bySubject', compact('namhocs', 'monhocs'));
    }

    public function bySemester() {
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        return view('baocaos.bySemester', compact('namhocs'));
    }

    public function showBySubject()
    {
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();
        $diemdat = DB::table('thamsos')->value('DiemDat');
        $hocky = request('HocKy');
        $namhoc = request('NamHoc');
        $lops = Lophoc::where('NamHoc', $namhoc)->get();
        $tenmonhoc = Monhoc::find(request('MonHoc'))->TenMonHoc;
        $solop = $lops->count();
        $dats = array_fill(0,$solop,0);

        foreach($lops as $index => $lop)
        {
            $soluongdat = DB::table('hocsinhs')
            ->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')
            ->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')
            ->join('diemmonhocs','hocsinhs.MaHocSinh','diemmonhocs.MaHocSinh')
            ->select('lophocs.MaLopHoc AS MaLopHoc', 'hocsinhs.MaHocSinh AS MaHocSinh','HoVaTen','MaMonHoc','HocKy','lophocs.NamHoc AS NamHoc','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK')
            ->where([['lophocs.MaLopHoc', $lop->MaLopHoc],['MaMonHoc', request('MonHoc')],['HocKy', $hocky],['lophocs.NamHoc', $namhoc],['DiemTongHK','>=',$diemdat]])
            ->count();
            $dats[$index] = $soluongdat;
        }
        

        return view('baocaos.bySubject', compact('hocky', 'namhoc', 'tenmonhoc', 'namhocs', 'monhocs', 'lops', 'dats'));
    }

    public function showBySemester()
    {
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $diemdat = DB::table('thamsos')->value('DiemDat');
        $hocky = request('HocKy');
        $namhoc = request('NamHoc');
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

        return view('baocaos.bySemester', compact('hocky', 'namhoc', 'namhocs', 'lops', 'dats'));
    }
}

