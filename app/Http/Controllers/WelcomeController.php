<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public funtion index(){
    	return views(welcome);
    }
}
