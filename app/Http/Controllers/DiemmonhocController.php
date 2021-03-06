<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diemmonhoc;
use App\Lophoc;
use App\Hocsinh;
use App\Monhoc;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DiemmonhocsExport;

class DiemmonhocController extends Controller
{
    public function index()
    {
        $lops = Lophoc::select('TenLop')->groupBy('TenLop')->get();
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();
        $malop = '';
        $mamon = '';
        $namhoc = '';
        $hocky = '';
        return view('diemmons.index', compact('lops', 'namhocs', 'monhocs','malop','mamon','namhoc', 'hocky'));
    }

    public function show()
    {
        $lops = Lophoc::select('TenLop','MaLopHoc')->groupBy('TenLop','MaLopHoc')->get();
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();
        $malop = Lophoc::where([['TenLop', request('TenLop')],['Namhoc', request('NamHoc')]])->first()->MaLopHoc ?? 0;
        $mamon = request('MonHoc');
        $namhoc = request('NamHoc');
        $hocky = request('HocKy');
        $hocsinhs = DB::table('hocsinhs')
            ->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')
            ->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')
            ->join('diemmonhocs','hocsinhs.MaHocSinh','diemmonhocs.MaHocSinh')
            ->select('lophocs.MaLopHoc AS MaLopHoc', 'hocsinhs.MaHocSinh AS MaHocSinh','HoVaTen','MaMonHoc','HocKy','lophocs.NamHoc AS NamHoc','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK')
            ->where([['lophocs.MaLopHoc', $malop],['MaMonHoc', $mamon],['HocKy', $hocky],['lophocs.NamHoc', $namhoc]])
            ->get();
        //return request('TenLop');
        return view('diemmons.index', compact('lops', 'namhocs', 'monhocs', 'hocsinhs','malop','mamon','namhoc', 'hocky'));
    }

    public function add()
    {
        return view('diemmons.add');
    }

    public function viewEdit($lop, $mamonhoc, $namhoc, $hocky)
    {
        $hocsinhs = DB::table('hocsinhs')->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')->where([['TenLop', $lop],['NamHoc', $namhoc]])->get();
        $tenmonhoc = Monhoc::find($mamonhoc)->TenMonHoc;
        $form = array($lop, $mamonhoc, $namhoc, $hocky);
        return view('diemmons.edit', compact('form', 'hocsinhs', 'tenmonhoc'));
    }

    public function edit($lop, $mamonhoc, $namhoc, $hocky)
    {
        //return request('mieng' . 1);
        $malop = Lophoc::where([['TenLop', $lop],['Namhoc', $namhoc]])->first()->MaLopHoc;
        $hocsinhs = Lophoc::where([['TenLop', $lop],['Namhoc', $namhoc]])->first()->hocsinhs;
        foreach ($hocsinhs as $hocsinh)
        {
            $diemtonghk = (request('mieng'.$hocsinh->MaHocSinh)+request('15p'.$hocsinh->MaHocSinh)+request('1tiet'.$hocsinh->MaHocSinh)+request('hocky'.$hocsinh->MaHocSinh)) / 4;

            Diemmonhoc::updateOrCreate(
                [
                    'MaHocSinh' => $hocsinh->MaHocSinh, 
                    'MaMonHoc' => $mamonhoc, 
                    'NamHoc' => $namhoc, 
                    'HocKy' => $hocky
                ],
                [
                    'DiemMieng' => request('mieng'.$hocsinh->MaHocSinh),
                    'Diem15P' => request('15p'.$hocsinh->MaHocSinh),
                    'Diem1Tiet' => request('1tiet'.$hocsinh->MaHocSinh),
                    'DiemHK' => request('hocky'.$hocsinh->MaHocSinh),
                    'DiemTongHK' => $diemtonghk
                ]
            );


        }

        return redirect(route('diemmonhocs.index'));
    }

    public function export($lop, $mamonhoc, $namhoc, $hocky)
    {
        $malop = Lophoc::where([['TenLop', $lop],['Namhoc', $namhoc]])->first()->MaLopHoc;
        $tenmonhoc = Monhoc::find($mamonhoc)->TenMonHoc;
        return Excel::download(new DiemmonhocsExport($lop, $tenmonhoc, $malop, $mamonhoc, $namhoc, $hocky), 'diem.csv');
    }
}
