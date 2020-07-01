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
    public function show($id)
    {
      $monhoc = Monhoc::find($id);
      return view('monhocs.detail', compact('monhoc'));
    }

    public function show_edit($id) {
      $monhoc = Monhoc::find($id);
      return view('monhocs.edit', compact('monhoc'));
    }

    public function edit($id) {

        $monhoc = Monhoc::findOrFail($id);
        $monhoc->TenMonHoc = request('TenMonHoc');
        $monhoc->save();

        return redirect(route('monhocs.index'));
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