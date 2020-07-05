<?php

namespace SergeyK89\testpackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestPackageController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        return view('testpackages::add', compact('result'));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}
