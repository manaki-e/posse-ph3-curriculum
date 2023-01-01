<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Content::with('questions.choices')->get();

        // dd($questions);

        return view('admin.index', compact('questions'));
    }
}
