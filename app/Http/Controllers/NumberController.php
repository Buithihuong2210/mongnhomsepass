<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    function oddNumber()
    {
        $odds = [];
        for ($i = 1; $i < 50; $i++){
            if ($i % 2 == 1){
             //   array_push($odds, $i);
                $odds[] = $i;
            }
        }

        return view('oddNumber', ['odds' => $odds]);
    }
}
