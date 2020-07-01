<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lophoc;
use App\Hocsinh;
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

    public function show($id) {
      $lophoc = LopHoc::find($id);
      $hocsinhs = array();
      $hocsinhschuaxeplop = DB::select('SELECT * from hocsinhs as hs WHERE hs.MaHocSinh NOT IN (SELECT MaHocSinh FROM hocsinh_lophoc)');
      $isInClass = DB::table('hocsinh_lophoc')->where('MaLopHoc', $id)->get();
      if(count($isInClass)>0) {
        foreach ($isInClass as $hslh) {
          $hocsinh = Hocsinh::findOrFail($hslh->MaHocSinh);
          array_push($hocsinhs,$hocsinh);
        }
      }
      return view('lophocs.detail', compact('lophoc','hocsinhs', 'hocsinhschuaxeplop'));
    }

    public function add_students($id) {
      $SoHocSinh = request('SoHocSinhChuaXepLop');
      for($i=0;$i<$SoHocSinh; $i++) {
        $MaHocSinh = request('MaHocSinh'.$i);
        if(!is_null($MaHocSinh))
        {
            DB::table('hocsinh_lophoc')->insert(['MaHocSinh' => $MaHocSinh, 'MaLopHoc' => $id]);
        }
      }
      return back();
    }



    public function show_edit($id) {
      $lophoc = LopHoc::find($id);
      return view('lophocs.edit', compact('lophoc'));
    }

    public function edit($id) {
        $lophoc = LopHoc::findOrFail($id);
        $lophoc->TenLop = request('TenLop');
        $lophoc->Khoi = request('Khoi');
        $lophoc->NamHoc = request('NamHoc');
        $lophoc->save();

        return redirect(route('lophocs.index'));
    }

    public function delete($id)
    {
      $lophoc = LopHoc::findOrFail($id);
      $isInClass = DB::table('hocsinh_lophoc')->where('MaLopHoc', $id)->get();
      if (count($isInClass) == 0)
      {
        $lophoc->delete();
      }
      return redirect(route('lophocs.index'));
    }

    public function delete_student($MaLopHoc,$MaHocSinh)
    {
      // $lophoc = LopHoc::findOrFail($MaLopHoc);
      $isInClass = DB::table('hocsinh_lophoc')->where('MaHocSinh',$MaHocSinh)->delete();
      return back();
    }

    public function delete_students($MaLopHoc)
    {
      // $lophoc = LopHoc::findOrFail($MaLopHoc);
      $isInClass = DB::table('hocsinh_lophoc')->where('MaLopHoc',$MaLopHoc)->delete();
      return back();
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
