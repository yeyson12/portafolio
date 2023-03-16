<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    /**
 * @param $lang
 *
 * @return \Illuminate\Http\RedirectResponse
 */
    public function index()
    {
         return view('index');
    }
}