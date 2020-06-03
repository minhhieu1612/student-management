<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monhoc;

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
    public function store(Request $request)
    {
        //store procedure
        return redirect(route('monhocs.index'));
    }
    public function delete()
    {
        return view('monhocs.delete');
    }
    public function deleted(Request $request)
    {
        //delete procedure
        return redirect(route('monhocs.index'));
    }
}
