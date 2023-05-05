<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    //
    public function index(){
        $date=date('Y-m-d');

        $tmp= Train::whereDate('orario_partenza', $date)->get();

        return view("home",compact('tmp'));
    }
}
