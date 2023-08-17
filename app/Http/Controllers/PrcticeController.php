<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrcticeController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function upload(Request $request){
        $inputs = $request->all();
    }
    // public function index(){ 
    // }
    // public function index(){     
    // }
    // public function index(){
    // }
}
