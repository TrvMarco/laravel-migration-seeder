<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::all();
        $today = date('Y-m-d');
        $trains_valid = Train::where('data', '=' ,  $today )->get();

        return view('home', compact('trains_valid'), compact('trains'));
    }
}
