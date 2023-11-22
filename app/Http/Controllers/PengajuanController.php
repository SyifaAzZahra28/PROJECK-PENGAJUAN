<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index (){
        return view ('contents.pengajuan.index');
    }

    public function tambah (){
        return view('contents.pengajuan.tambah');
    }

    public function edit (){
        return view('contents.pengajuan.edit');
    }

}
