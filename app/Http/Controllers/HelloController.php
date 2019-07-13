<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(){

        $name = 'Dai Nguyen';
        $tuoi = '25';
        $address = 'Ha Noi';

        return view('hello', [
            'ten' => $name,
            'tuoi' => $tuoi,
            'diachi' => $address,
            // dd('da vao den HelloController');
        ]);
    }
}
