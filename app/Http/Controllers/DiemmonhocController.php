<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diemmonhoc;
use App\Lophoc;
use App\Hocsinh;
use Illuminate\Support\Facades\DB;

class DiemmonhocController extends Controller
{
    public function index()
    {
        $diemmh = Diemmonhoc::all();
        return view('diemmonhocs.index',compact('diemmh'));
    }

    public function add()
    {
        return view('diemmonhocs.add');
    }

    public function edit(Request $request)
    {
        $lophoc = Lophoc::findOrFail($request->input('MaLopHoc'));
        $hocsinhs = $lophoc->hocsinhs();
        $diems = [];
        foreach ($hocsinhs as $hocsinh)
        {
            array_push($diems, $hocsinh->diemmonhocs()
                    ->where('MaMonHoc',$request->input('MaMonHoc'))
                    ->where('HocKy',$request->input('HocKy'))
                    ->where('NamHoc',$request->input('NamHoc'))
                    ->get());
        }
        
        
        return view('diemmonhocs.edit', compact('hocsinhs', 'diems'));
    }

    public function store(Request $req)
    {
        if ($req->input('DiemMieng') <= 10 && $req->input('DiemMieng') > 0 &&
            $req->input('Diem15P') <= 10 && $req->input('Diem15P') > 0 &&
            $req->input('Diem1Tiet') <= 10 && $req->input('Diem1Tiet') > 0 &&
            $req->input('DiemHK') <= 10 && $req->input('DiemHK') > 0 &&
            $req->input('DiemTongHK') <= 10 && $req->input('DiemTongHK') > 0)
        {

        }
    }
}
