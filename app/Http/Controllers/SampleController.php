<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class SampleController extends Controller

{
    public function Fnlogin(){
        return view('login');
    }
    public function Fnlist()
    {
       return view('products');
    }

    public function Fnshow($id){
     return view('singleproduct');
    }

 
}
