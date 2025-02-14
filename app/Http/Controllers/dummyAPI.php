<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    function getData(int $id){
        var_dump($id);
        return  ["name"=>"hello"];
    }
}
