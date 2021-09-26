<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class HomeController extends Controller
{
    public function index()
    {
        $questions = $this->getQuestions();
        return view('landing',['questions'=>$questions]);
    }
    public function getQuestions(){
        $questions =  DB::select('select * from questions');
        return $questions;
    }
}
