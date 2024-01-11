<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformsController extends Controller
{
    public function Informations(){
        return view("informations");
    }
}
