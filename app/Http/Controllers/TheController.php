<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\Projects;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class TheController extends Controller
{
    public function index(){
        $skills= Skills::all();
        $projects=Projects::all();
        return view('index',[
            'skills'=>$skills,
            'projects'=> $projects
        ]);
    }

}
