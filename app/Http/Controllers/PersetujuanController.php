<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    public function index(){
        return view('contents.agreement.index');
    }
    
    public function detail (){
        return view('contents.agreement.detail');
    }

    public function rejected (){
        return view('contents.agreement.rejected');
    }
}
