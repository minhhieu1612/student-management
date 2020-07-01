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

        return view('diemmons.index',compact('lops', 'namhocs', 'monhocs'));
    }

    public function show()
    {
        $lop = Lophoc::where([['TenLop', request('TenLop')],['Namhoc', request('NamHoc')]])->first()->MaLopHoc;

        $hocsinhs = $lop->hocsinhs;

        return back()->with(compact('hocsinhs'));
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
