<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CauhinhController extends Controller
{
    public function index()
    {
      return view('cauhinhs.index');
    }

    public function edit() {
      return view('cauhinhs.edit');
    }
}
