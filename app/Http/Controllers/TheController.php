<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\Projects;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

use function GuzzleHttp\Promise\all;

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

    public function create(){
        return view('form');
    }

    public function store()
    {
        $project = new Projects();

        $project->name = request('name');
        $platform = request('platform');
        echo $platform;
        switch ($platform) {
            case "PHP":
                $project->picpath = "assets/img/php.png";
                break;
            
            case "React":
                $project->picpath = "assets/img/react.png";
                break;

            case "Laravel":
                $project->picpath = "assets/img/laravel.png";
                break;
            
            case "Java":
                $project->picpath = "assets/img/java.png";
                break;
                
            default:
                $project->picpath = "assets/img/Portfolio-6.jpg";
                break;
        }
        $project->description = request('description');
        $project->link = request('link');

        $project->save();

        return redirect('/');
    }

    public function mail(){

        Mail::to('payhez@gmail.com')->send(new ContactFormMail());
    }
}