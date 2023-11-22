<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisetujuiController extends Controller
{
    public function index(){
        return view('contents.disetujui.index');
    }
}
