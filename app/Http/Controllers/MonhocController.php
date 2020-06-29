<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monhoc;
use Illuminate\Support\Facades\DB;

class MonhocController extends Controller
{
    public function index()
    {
        $monhocs = Monhoc::all();
        return view('monhocs.index', compact('monhocs'));
    }
    public function create()
    {
      return view('monhocs.create');
    }
    public function show()
    {
      return view('monhocs.detail');
    }

    public function edit($MaMonHoc) {
      $monhoc = Monhoc::find($MaMonHoc);
      return view('monhocs.edit', compact('lophoc'));
    }

    public function store(Request $request)
    {
        //store procedure
        DB::table('monhocs')->insert([
            'TenMonHoc' => $request->input('TenMonHoc')
        ]);
        return redirect(route('monhocs.index'));
    }
    public function delete()
    {
        return view('monhocs.delete');
    }
    public function deleted(Request $request)
    {
        //delete procedure
        $monhoc = Monhoc::where('TenMonHoc',$request->input('TenMonHoc'))->firstOrFail();
        $monhoc->delete();
        return redirect(route('monhocs.index'));
    }
}
