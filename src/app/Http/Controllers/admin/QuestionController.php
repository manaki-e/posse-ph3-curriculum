<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Question;
use App\Models\Choice;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $contents = Content::where('id', $id)->with('questions.choices')->get();

        return view('admin.question.index', compact('id', 'contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('admin.question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $question = Question::where('id', $id)->with('choices')->get();

        return view('admin.question.detail', compact('id', 'question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::where('id', $id)->with('choices')->get();

        return view('admin.question.edit', compact('id', 'question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->question = $request["question"];
        $question->question_image = $request["question_en"];
        $question->timestamps = false;
        $question->save();

        for ($i = 1; $i < 4; $i++) {
            $choice = Choice::find(($id - 1) * 3 + $i);
            $choice->choice = $request["choice_{$i}"];
            $choice->timestamps = false;
            $choice->save();
        }

        return redirect()->route('admin.question', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $choice = Choice::where('question_id', $id);
        $choice->delete();

        $question = Question::find($id);
        $question->delete();

        return redirect()->route('admin.question', ['id' => $id]);
    }

    public function up($id, $pos)
    {
        $question_this = Question::where('pos', $pos)->get()[0];
        $question_this->pos = $pos - 1;
        $question_this->timestamps = false;
        
        $question_other = Question::where('pos', $pos - 1)->get()[0];
        $question_other->pos = $pos;
        $question_other->timestamps = false;

        $question_this->save();
        $question_other->save();

        return redirect()->route('admin.question', ['id' => $id]);
    }

    public function down($id, $pos)
    {
        $question_this = Question::where('pos', $pos)->get()[0];
        $question_this->pos = $pos + 1;
        $question_this->timestamps = false;
        
        $question_other = Question::where('pos', $pos + 1)->get()[0];
        $question_other->pos = $pos;
        $question_other->timestamps = false;

        $question_this->save();
        $question_other->save();

        return redirect()->route('admin.question', ['id' => $id]);
    }
}
