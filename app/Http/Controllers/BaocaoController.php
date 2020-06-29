<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaocaoController extends Controller
{
    public function bySubject()
    {
      return view('baocaos.bySubject');
    }

    public function bySemester() {
      return view('baocaos.bySemester');
    }
}
