<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index(){
        return view ('contents.ditolak.index');
    }

    public function detail(){
        return view('contents.ditolak.detail');
    }
}
