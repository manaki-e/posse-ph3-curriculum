<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Question;
use App\Models\Choice;

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

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $question = new Question;
        $question->content_id = 1;
        $question->question = $request["question"];
        $question->question_image = $request["question_en"];
        $question->timestamps = false; 
        $question->save();

        $question_id_last = Question::latest('id')->first()->id;

        // 後程修正
        $request["answer"] = "answer_2";

        $choice = new Choice;
        $choice->question_id = $question_id_last;
        $choice->choice = $request["choice_1"];
        $choice->valid = $request["answer"] == "answer_1" ? 1 : 0;
        $choice->timestamps = false; 
        $choice->save();

        $choice = new Choice;
        $choice->question_id = $question_id_last;
        $choice->choice = $request["choice_2"];
        $choice->valid = $request["answer"] == "answer_2" ? 1 : 0;
        $choice->timestamps = false; 
        $choice->save();

        $choice = new Choice;
        $choice->question_id = $question_id_last;
        $choice->choice = $request["choice_3"];
        $choice->valid = $request["answer"] == "answer_3" ? 1 : 0;
        $choice->timestamps = false; 
        $choice->save();


        //一覧表示画面にリダイレクト
        return redirect()->route('admin');
    }
}
