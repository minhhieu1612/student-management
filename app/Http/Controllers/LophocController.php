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
        $max_siso = DB::table('thamsos')->value('SiSoToiDa');
        $max_solop = DB::table('thamsos')->value('SoLopToiDa');
        $MaHocSinhs = explode(',', $request->input('MaHocSinh'));
        $siso = count($MaHocSinhs);
        $solop = Lophoc::where('Khoi', $request->input('Khoi'))->get()->count();

        if ($siso <= $max_siso && $solop <= $max_solop)
        {
            $id = DB::table('lophocs')->insertGetID([
                'NamHoc' => $request->input('NamHoc'),
                'Khoi' => $request->input('Khoi'),
                'TenLop' => $request->input('TenLop'),
                'SiSo' => $siso,
            ]);
            foreach ($MaHocSinhs as $ma)
            {
               DB::table('hocsinh_lophoc')->insert([
                    'MaLopHoc' => $id,
                    'MaHocSinh' => $ma
                ]);
            }
        }

        return redirect(route('lophocs.index'));
    }

    public function add()
    {
        return view('lophocs.add');
    }

    public function store2(Request $request)
    {
        $MaHocSinhs = explode(',', $request->input('MaHocSinh'));
        $soma = count($MaHocSinhs);
        $max_siso = DB::table('thamsos')->value('SiSoToiDa');
        $siso = Lophoc::find($request->input('MaLopHoc'))->SiSo;
        if ($siso + $soma <= $max_siso)
        {
            foreach ($MaHocSinhs as $ma)
            {
                DB::table('hocsinh_lophoc')->insert([
                    'MaLopHoc' => $request->input('MaLopHoc'),
                    'MaHocSinh' => $ma
                ]);
            }
            Lophoc::where('MaLopHoc', $request->input('MaLopHoc'))->update(['SiSo' => $siso + $soma]);
        }

        return redirect(route('lophocs.index'));
    }
}
