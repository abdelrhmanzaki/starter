<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function construct(){
       //$this -> middlware('auth');
    }

    public function showstring0(){

        return 'static string0';
    }
    public function showstring1(){

        return 'static string1';
    }
    public function showstring2(){

        return 'static string2';
    }
    public function showstring3(){

        return 'static string3';
    }
}
