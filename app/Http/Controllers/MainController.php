<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function service(){
        $service = Service::all();
        return view('welcome',compact('service'));
    }
}
