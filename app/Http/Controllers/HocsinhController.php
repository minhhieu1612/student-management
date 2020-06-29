<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use App\LopHoc;
use App\Diemmonhoc;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HocsinhController extends Controller
{
    public function index()
    {
        $hocsinhs = Hocsinh::all();
        return view('hocsinhs.index', compact('hocsinhs'));
    }
    public function create()
    {
        return view('hocsinhs.create');
    }
    public function store(Request $request)
    {
        $today = new Carbon(date('y.m.d'));
        $birthday = new Carbon($request->input('NgaySinh'));
        $diff = $today->diff($birthday);
        $min_age = DB::table('thamsos')->value('TuoiToiThieu');
        if ($diff->y >= $min_age)
        {
            $hocsinh = new Hocsinh();
                $hocsinh->HoVaTen = $request->input('HoVaTen');
                $hocsinh->NgaySinh = $request->input('NgaySinh');
                $hocsinh->GioiTinh = $request->input('GioiTinh');
                $hocsinh->DiaChi = $request->input('DiaChi');
                $hocsinh->QueQuan = $request->input('QueQuan');
                $hocsinh->save();
        }

        return redirect(route('hocsinhs.index'));
    }

    public function edit($MaHocSinh) {
      $hocsinh = Hocsinh::find($MaHocSinh);
      return view('hocsinhs.edit',compact('hocsinh'));
    }

    public function delete()
    {
        return view('hocsinhs.delete');
    }

    public function show($MaHocSinh)
    {
        $hocsinh = Hocsinh::find($MaHocSinh);
        $birthday = Carbon::createFromFormat('Y-m-d', $hocsinh->NgaySinh);
        $hocsinh->NgaySinh = $birthday->format('d-m-Y');

        $malop = DB::table('hocsinh_lophoc')->where('MaHocSinh', $MaHocSinh)->get()[0]->MaLopHoc;
        $lop = Lophoc::find($malop);

        $diemmonhocs = Diemmonhoc::where([['MaHocSinh','=', $MaHocSinh],['NamHoc','=', $lop->NamHoc]])->get();
        $diemhk1 = $diemmonhocs->where('HocKy',1);
        $diemhk2 = $diemmonhocs->where('HocKy',2);

        $tbhk1 = 0.0;
        $tbhk2 = 0.0;
        foreach ($diemhk1 as $diem)
        {
            is_null($diem->DiemTongHK) ? 0.0 : $diem->DiemTongHK;
            $tbhk1 += $diem->DiemTongHK;
        }
        foreach ($diemhk2 as $diem)
        {
            is_null($diem->DiemTongHK) ? 0.0 : $diem->DiemTongHK;
            $tbhk2 += $diem->DiemTongHK;
        }
        $tbhk1 /= 10;
        $tbhk2 /= 10;

        return view('hocsinhs.detail', compact('hocsinh', 'lop', 'diemhk1', 'diemhk2', 'tbhk1', 'tbhk2'));
    }

    public function destroy($MaHocSinh)
    {
        $hocsinh = Hocsinh::find($MaHocSinh);
        $isInClass = DB::table('hocsinh_lophoc')->where('MaHocSinh', $MaHocSinh)->get();
        if ($isInClass == [])
        {
            $hocsinh->delete();
        }

        return redirect(route('hocsinhs.index'));
    }
}
