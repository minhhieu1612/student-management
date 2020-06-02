<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;

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
    public function store()
    {
        Hocsinh::create($this->validateHocsinh());
        return redirect(route('hocsinhs.index'));
    }
    public function delete()
    {
        return view('hocsinhs.delete');
    }
    public function deleted(Request $request)
    {
        $hocsinh = Hocsinh::find($request->MaHocSinh);
        $hocsinh->delete();
        return redirect(route('hocsinhs.index'));
    }
    protected function validateHocsinh()
    {
        return request()->validate([
            'HoVaTen' => 'required',
            'NgaySinh' => 'required',
            'GioiTinh' => 'required',
            'DiaChi' => 'required',
            'QueQuan' => '',
        ]);
    }
}
