<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Question;
use App\Models\Choice;

class QuizController extends Controller
{
    public function index($id)
    {
        $contents = Content::all();
        return view('quiz.index', compact('id', 'contents'));
    }
}
