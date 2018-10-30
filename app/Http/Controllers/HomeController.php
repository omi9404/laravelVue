<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        
        $dups = array();
foreach(array_count_values($arr) as $val => $c)
    if($c > 1) $dups[] = $val;


        ##Array add laravel function
        $array = array_add(['name' => 'Desk'], 'price', 100);
        $array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        [$keys, $values] = array_divide(['name' => 'Desk']);
        print_r($values);exit;

        $data = ['title' => 'Hello Lodhi'];

        $pdf = PDF::loadView('myPDF', $data);



        return $pdf->download('hdtuto.pdf');
    }

    
}
