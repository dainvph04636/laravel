<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function input(){

       	return view('input');
    }

    public function sum(Request $request){
    	$data = $request->all();
    	$a = $data['n_a'];
    	$b = $data['n_b'];
    	$c = $data['n_c'];

    	$x;
    	$x1;
    	$x2;

    	if ($a == 0) {
    		$x = - $c/$b;
    			return view('output',['ket_qua'=> $x]);

    	}
    	else{
    		$delta = $b*$b - 4*$a*$c;
    		if ($delta < 0) {
    			$x = "vo nghiem";
    			return view('output',['ket_qua'=> $x]);
    		}else if ($delta == 0) {
    			$x1 = -$b/(2*$a);
    			return view('output',['ket_qua_1'=> $x1]);

    		}else{
    			$x1 = (- $b + sqrt($delta))/(2*$a);
    			return view('output',['ket_qua_1'=> $x1]);

    			$x2 = (- $b - sqrt($delta))/(2*$a);
    			return view('output',['ket_qua_2'=> $x2]);

    		}
    	}
    	// dd($request->all());
    	
    	return view('output', ['ket_qua' => $sum]);
    }
}
