<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeonController extends Controller
{
    // controller function = can give any name
    public function callfile(){
        return view('usingController'); // view controller file name
    }

    // controller function = can give any name
    public function callfile2(){
        return view('ControllerNo2'); // view controller file name
    }
}
