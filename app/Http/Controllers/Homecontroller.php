<?php
namespace App\Http\Controllers;

use illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }
}