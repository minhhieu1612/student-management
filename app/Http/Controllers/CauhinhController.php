<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CauhinhController extends Controller
{
    public function index()
    {
      $cauhinhs = DB::table('thamsos')->get();
      return view('cauhinhs.index', compact('cauhinhs'));
    }

    public function show_edit() {
      $cauhinhs = DB::table('thamsos')->get();
      return view('cauhinhs.edit', compact('cauhinhs'));
    }


    public function edit() {
      $cauhinh = DB::table('thamsos')->find(request('MaCauHinh'));
      if($cauhinh) {
        DB::table('thamsos')
        ->update([
            'id' => request('MaCauHinh'),
            'TuoiToiThieu' => request('TuoiToiThieu'),
            'SoLopToiDa' => request('SoLopToiDa'),
            'SiSoToiDa' => request('SiSoToiDa'),
            'DiemToiThieu' => request('DiemToiThieu'),
            'DiemToiDa' => request('DiemToiDa'),
            'DiemDat' => request('DiemDat'),
        ]);
      } else {
        DB::table('thamsos')
          ->insert([
              'id' => request('MaCauHinh'),
              'TuoiToiThieu' => request('TuoiToiThieu'),
              'SoLopToiDa' => request('SoLopToiDa'),
              'SiSoToiDa' => request('SiSoToiDa'),
              'DiemToiThieu' => request('DiemToiThieu'),
              'DiemToiDa' => request('DiemToiDa'),
              'DiemDat' => request('DiemDat'),
          ]);
      }
      $cauhinhs = DB::table('thamsos')->get();
      return redirect(route('cauhinhs.index'));
    }
}
