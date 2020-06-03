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

    public function store1(Request $request)
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

    public function store2(Request $request)
    {
        $MaHocSinhs = explode(',', $request->input('MaHocSinh'));
        $siso = count($MaHocSinhs);
        foreach ($MaHocSinhs as $ma) 
        {
           DB::table('chitietlophocs')->insert([
                'MaLopHoc' => $id,
                'MaHocSinh' => $ma
            ]);
        }
        $old_siso = DB::table('lophocs')->where('MaLopHoc', $request->input('MaLopHoc'))->value('SiSo');
        DB::table('lophocs')->where('MaLopHoc', $request->input('MaLopHoc'))->update(['SiSo' => $old_siso + $siso]);

        return redirect(route('lophocs.index'));
    }

    public function add()
    {
        return view('lophocs.add');
    }
}
