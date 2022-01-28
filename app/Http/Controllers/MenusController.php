<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function global() {
        $title = 'GLOBAL';
        return view('global')->with('title', $title);
    } 

    public function management() {
        $title = 'MANAGEMENT';
        return view('management')->with('title', $title);
    } 
}
