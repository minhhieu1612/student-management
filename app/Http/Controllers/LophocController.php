<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lophoc;
use Illuminate\Support\Facades\DB;

class LophocController extends Controller
{
    public function index()
    {
        $lophocs = Lophoc::all();
        return view('lophocs.index', compact('lophocs'));
    }
    public function create()
    {
        return view('lophocs.create');
    }
    public function store(Request $request)
    {
        $MaHocSinhs = explode(',', $request->input('MaHocSinh'));
        $siso = count($MaHocSinhs);
        $id = DB::table('lophocs')->insertGetID([
            'NamHoc' => $request->input('NamHoc'),
            'Khoi' => $request->input('Khoi'),
            'TenLop' => $request->input('TenLop'),
            'SiSo' => $siso,
        ]);
        foreach ($MaHocSinhs as $ma) 
        {
           DB::table('chitietlophocs')->insert([
                'MaLopHoc' => $id,
                'MaHocSinh' => $ma
            ]);
        }
        return redirect(route('lophocs.index'));
    }
}
