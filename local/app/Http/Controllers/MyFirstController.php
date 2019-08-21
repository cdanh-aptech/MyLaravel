<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    // public function getController(){
    //     echo 'Hello Laravel. My first controller!';
    // }

    public function getController($num1, $num2){
        $sum = $num1 + $num2;
        return $num1 . ' + ' . $num2 . ' = ' . $sum;
    }
}
