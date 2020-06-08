<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use Illuminate\Support\Facades\DB;

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
        $today = new Datetime(date('m.d.y'));
        $diff = $today->diff($request->input('NgaySinh'));
        $min_age = DB::table('thamsos')->value('TuoiToiThieu');
        if ($diff->y >= $min_age)
        {
            DB::table('hocsinhs')->insertOrIgnore([
                'HoVaTen' => $request->input('HoVaTen'),
                'NgaySinh' => $request->input('NgaySinh'),
                'GioiTinh' => $request->input('GioiTinh'),
                'DiaChi' => $request->input('DiaChi'),
                'QueQuan' => $request->input('QueQuan')
            ]);
        }
        
        return redirect(route('hocsinhs.index'));
    }
    public function delete()
    {
        return view('hocsinhs.delete');
    }
    public function deleted(Request $request)
    {
        $hocsinh = Hocsinh::find($request->MaHocSinh);
        $isInClass = DB::table('chitietlophocs')->where('MaHocSinh',$request->MaHocSinh)->get();
        if ($isInClass == [])
        {
            $hocsinh->delete();
        }
        
        return redirect(route('hocsinhs.index'));
    }
}
