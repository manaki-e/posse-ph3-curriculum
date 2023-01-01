<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class QuestionController extends Controller
{
    public function index()
    {
        $contents = Content::with('questions.choices')->get();

        return view('admin.index', compact('contents'));
    }

    public function detail()
    {
        $contents = Content::with('questions.choices')->get();

        return view('admin.detail', compact('contents'));
    }
}
