<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function convert()
    {
        $decimal = array(1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);
        $roman = array('M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' );
        $num = request('convert');
        $romanized = " ";

        for ($i = 0; $i < count($decimal); $i++) {
            while ($decimal[$i] <= $num) {
              $romanized = $romanized . $roman[$i];
              $num -= $decimal[$i];
            }
        }

        //dd($romanized);
        return view('result')->with('romanized', json_encode($romanized));
    }   

}
