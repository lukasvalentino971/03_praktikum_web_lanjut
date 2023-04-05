<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class datax extends Controller
{
    function show(){
        $dataUser=data::all();
        return view('profile',['dataTotal'=>$dataUser]);
    }   
}