<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class Mycontroller extends Controller
{
    private function myprivate(){
        return 1;
    }

    function myfunction(Request $req , $varl=""){
        // echo $this->myprivate();
        $data['myinput'] = $req->input('myinput'); 
        $data['myvalue'] = $varl;
        return view('myview', $data);
        //return "<h1>My Controller</h1>";
    }

    function mulTable(Request $req) {
        $data['multitable'] = [];
        $var = $req->input('inputNumber');
        if (!empty($var)) {
            for ($i = 1; $i <= 12; $i++) {
                $data['multitable'][] = "$var x $i = " . ($var * $i);
            }
        }
        return view('myview', $data); 
    }
}

