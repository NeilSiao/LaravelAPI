<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualApiController extends Controller
{
    //
    public function dog(Request $request){
        return view('dog');
    }
}
