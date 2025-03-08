<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function insert(Request $data){
        $value=new Value ();
        $value->soda=$data->input('soda');
        $value->potash=$data->input('potash');
        $value->jalor=$data->input('jalor');
        $value->sn1=$data->input('sn1');
        $value->sn2=$data->input('sn2');
        $value->mj2=$data->input('mj2');
        $value->rd2=$data->input('rd2');
        $value->tclay=$data->input('tclay');
        $value->submit();


    }
}
