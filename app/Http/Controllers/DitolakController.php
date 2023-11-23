<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DitolakController extends Controller
{
    public function index(){
        return view ('contents.rejected.index');
    }

    public function detail(){
        return view('contents.rejected.detail');
    }
}
