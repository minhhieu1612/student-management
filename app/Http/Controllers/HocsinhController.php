<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use App\LopHoc;
use App\Monhoc;
use App\Diemmonhoc;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Imports\HocsinhsImport;
use Maatwebsite\Excel\Facades\Excel;

function console_log($message)
{
    print($message);
    flush();
    ob_flush();
}

class HocsinhController extends Controller
{
    public function index()
    {
        $hocsinhs = Hocsinh::all();
        return view('hocsinhs.index', compact('hocsinhs'));
    }
    public function create()
    {
        $lophocs = LopHoc::all();
        return view('hocsinhs.create',compact('lophocs'));
    }
    public function store()
    {
        $today = new Carbon(date('y.m.d'));
        $birthday = new Carbon(request('NgaySinh'));
        $diff = $today->diff($birthday);
        $min_age = DB::table('thamsos')->value('TuoiToiThieu');
        if ($diff->y >= $min_age)
        {
            $hocsinh = new Hocsinh();
            $hocsinh->HoVaTen = request('HoVaTen');
            $hocsinh->NgaySinh = request('NgaySinh');
            $hocsinh->GioiTinh = request('GioiTinh');
            $hocsinh->DiaChi = request('DiaChi');
            $hocsinh->QueQuan = request('QueQuan');
            $hocsinh->save();

            if(!is_null(request('MaLopHoc')))
            {
                DB::table('hocsinh_lophoc')->insert(['MaHocSinh' => $hocsinh->MaHocSinh, 'MaLopHoc' => request('MaLopHoc')]);
            }

        }

        return redirect(route('hocsinhs.index'));
    }

    public function edit($MaHocSinh)
    {
        $hocsinh = Hocsinh::findOrFail($MaHocSinh);

        $lop_belong = DB::table('hocsinh_lophoc')->where('MaHocSinh', $MaHocSinh)->first();
        $malop = is_null($lop_belong) ? "" : $lop_belong->MaLopHoc;
        $lophocs = LopHoc::all();

        return view('hocsinhs.edit',compact('hocsinh', 'malop','lophocs'));
    }

    public function update($MaHocSinh)
    {
        $hocsinh = Hocsinh::findOrFail($MaHocSinh);
        $hocsinh->HoVaTen = request('HoVaTen');
        $hocsinh->NgaySinh = request('NgaySinh');
        $hocsinh->GioiTinh = request('GioiTinh');
        $hocsinh->DiaChi = request('DiaChi');
        $hocsinh->QueQuan = request('QueQuan');
        $hocsinh->save();

        if (!is_null(request('MaLopHoc')))
        {
           DB::table('hocsinh_lophoc')
            ->updateOrInsert([
                'MaHocSinh' => $MaHocSinh,
                'MaLopHoc' => request('MaLopHoc')
            ]);
        }


        return redirect(route('hocsinhs.index'));
    }

    public function show($MaHocSinh)
    {
        $hocsinh = Hocsinh::findOrFail($MaHocSinh);
        $birthday = Carbon::createFromFormat('Y-m-d', $hocsinh->NgaySinh);
        $hocsinh->NgaySinh = $birthday->format('d-m-Y');

        $lop_belong = DB::table('hocsinh_lophoc')->where('MaHocSinh', $MaHocSinh)->first();
        $malop = is_null($lop_belong) ? 0 : $lop_belong->MaLopHoc;

        if ($malop != null)
        {
            $lop = Lophoc::find($malop);
            $monhocs = Monhoc::all();

            $diemmonhocs = Diemmonhoc::where([['MaHocSinh','=', $MaHocSinh],['NamHoc','=', $lop->NamHoc]])->get();
            $diemhk1 = $diemmonhocs->where('HocKy',1);
            $diemhk2 = $diemmonhocs->where('HocKy',2);

            $tbhk1 = 0.0;
            $tbhk2 = 0.0;
            foreach ($diemhk1 as $diem)
            {
                $m = is_null($diem->DiemTongHK) ? 0.0 : $diem->DiemTongHK;
                $tbhk1 += $m;
            }
            foreach ($diemhk2 as $diem)
            {
                $m = is_null($diem->DiemTongHK) ? 0.0 : $diem->DiemTongHK;
                $tbhk2 += $m;
            }
            $tbhk1 /= 10;
            $tbhk2 /= 10;
        }
        else
        {
            $lop = null;
            $diemhk1 = $diemhk2 = null;
            $tbhk1 = $tbhk2 = 0;
            $monhocs = Monhoc::all();
        }


        return view('hocsinhs.detail', compact('hocsinh', 'lop', 'monhocs', 'diemhk1', 'diemhk2', 'tbhk1', 'tbhk2'));
    }

    public function delete($MaHocSinh)
    {
      $hocsinh = Hocsinh::findOrFail($MaHocSinh);
      $isInClass = DB::table('hocsinh_lophoc')->where('MaHocSinh', $MaHocSinh)->get();
      if (count($isInClass) == 0)
      {
        $hocsinh->delete();
      }
      return redirect(route('hocsinhs.index'));
    }

    public function import(Request $request)
    {
        Excel::import(new HocsinhsImport, $request->file('file'));

        return back();
    }
}
