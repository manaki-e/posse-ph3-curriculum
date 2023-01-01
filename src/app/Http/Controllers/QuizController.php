<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Question;
use App\Models\Choice;

class QuizController extends Controller
{
    public function index($id)
    {
        $contents = Content::where('id', $id)->with('questions.choices')->get();

        // $contents = Content::with(['questions.choices' => function ($query) {
        //     $query->where('id', '===', 1);
        // }])->get();

        return view('quiz.index', compact('id', 'contents'));
    }
}
