<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diemmonhoc;
use App\Lophoc;
use App\Hocsinh;
use App\Monhoc;
use Illuminate\Support\Facades\DB;

class DiemmonhocController extends Controller
{
    public function index()
    {
        $lops = Lophoc::select('TenLop')->groupBy('TenLop')->get();
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();

        return view('diemmons.index', compact('lops', 'namhocs', 'monhocs'));
    }

    public function show()
    {
        $lops = Lophoc::select('TenLop')->groupBy('TenLop')->get();
        $namhocs = Lophoc::select('NamHoc')->groupBy('NamHoc')->get();
        $monhocs = Monhoc::all();
        //$lop = Lophoc::where([['TenLop', request('TenLop')],['Namhoc', request('NamHoc')]])->first();
        //$hocsinhs = $lop->hocsinhs;

        $hocsinhs = DB::table('hocsinhs')
            ->join('hocsinh_lophoc','hocsinhs.MaHocSinh','hocsinh_lophoc.MaHocSinh')
            ->join('lophocs','hocsinh_lophoc.MaLopHoc','lophocs.MaLopHoc')
            ->join('diemmonhocs','hocsinhs.MaHocSinh','diemmonhocs.MaHocSinh')
            ->select('hocsinhs.MaHocSinh AS MaHocSinh','HoVaTen','MaMonHoc','HocKy','lophocs.NamHoc AS NamHoc','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK')
            ->where([['MaMonHoc', 1],['HocKy', 1],['lophocs.NamHoc', 2020]])
            ->get();
        //return request('TenLop');
        return view('diemmons.index', compact('lops', 'namhocs', 'monhocs', 'hocsinhs'));
    }

    public function add()
    {
        return view('diemmons.add');
    }

    public function viewEdit() {
      return view('diemmons.edit');
    }

    public function edit(Request $request)
    {
        $lophoc = Lophoc::findOrFail($request->input('MaLopHoc'));
        $hocsinhs = $lophoc->hocsinhs();
        // $diems = [];
        // foreach ($hocsinhs as $hocsinh)
        // {
        //     array_push($diems, $hocsinh->diemmonhocs()
        //             ->where('MaMonHoc',$request->input('MaMonHoc'))
        //             ->where('HocKy',$request->input('HocKy'))
        //             ->where('NamHoc',$request->input('NamHoc'))
        //             ->get());
        // }


        return view('diemmons.edit', compact('hocsinhs'));
    }

    public function store(Request $req)
    {
        if ($req->input('DiemMieng') <= 10 && $req->input('DiemMieng') > 0 &&
            $req->input('Diem15P') <= 10 && $req->input('Diem15P') > 0 &&
            $req->input('Diem1Tiet') <= 10 && $req->input('Diem1Tiet') > 0 &&
            $req->input('DiemHK') <= 10 && $req->input('DiemHK') > 0 &&
            $req->input('DiemTongHK') <= 10 && $req->input('DiemTongHK') > 0)
        {
            $lophoc = Lophoc::findOrFail($request->input('MaLopHoc'));
            $hocsinhs = $lophoc->hocsinhs();
            foreach ($hocsinhs as $hocsinh)
            {
                Diemmonhoc::where('MaHocSinh',$hocsinh->MaHocSinh)
                        ->where('MaMonHoc',$request->input('MaMonHoc'))
                        ->where('HocKy',$request->input('HocKy'))
                        ->where('NamHoc',$request->input('NamHoc'))
                        ->insert([]);
            }
        }
    }
}
