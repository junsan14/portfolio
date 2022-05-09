<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index($id){
        return view('work.work'.$id.'.index');
    }
    public function top($id){
        return view('work.work'.$id.'.index');
    }
    public function aboutIndex($id){
        return view('work.work'.$id.'.about');
    }
    public function photoIndex($id){
        return view('work.work'.$id.'.photo');
    }

    public function ecIndex($id){
        return view('work.work'.$id.'.ec');
    }
    public function locationIndex($id){
        return view('work.work'.$id.'.location');
    }
    public function contactIndex($id){
        return view('work.work'.$id.'.contact');
    }
}
