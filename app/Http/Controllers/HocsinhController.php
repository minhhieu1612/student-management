<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use Illuminate\Support\Facades\DB;
use Datetime;

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
        $today = new Datetime(date('y.m.d'));
        $birthday = new Datetime($request->input('NgaySinh'));
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

    public function delete()
    {
        return view('hocsinhs.delete');
    }

    public function show()
    {
      return view('hocsinhs.detail');
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
