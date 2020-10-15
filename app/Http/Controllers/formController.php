<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class formController extends Controller
{
    public function index(){
        return view('form');
    }
}
