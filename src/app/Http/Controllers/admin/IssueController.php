<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::orderBy('pos')->get();

        return view('admin.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last_id = Content::latest('id')->first()->id;

        $content = new Content;
        $content->content = $request["content"];
        $content->pos = $last_id + 1;
        $content->timestamps = false;
        $content->save();

        //一覧表示画面にリダイレクト
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id);

        return view('admin.edit', compact('content'));
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
        $content = Content::find($id);

        $content->content = $request["content"];
        $content->timestamps = false;

        $content->save();

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);

        $content->delete();

        return redirect('admin');
    }

    public function up($pos)
    {
        $content_this = Content::where('pos', $pos)->get()[0];

        $content_this->pos = $pos - 1;
        $content_this->timestamps = false;
        $content_this->save();

        $content_other = Content::where('pos', $pos - 1)->get()[0];
        $content_other->pos = $pos;
        $content_other->timestamps = false;
        $content_other->save();

        return redirect('admin');
    }

    public function down($pos)
    {
        $content_this = Content::where('pos', $pos)->get()[0];

        $content_this->pos = $pos + 1;
        $content_this->timestamps = false;
        $content_this->save();

        $content_other = Content::where('pos', $pos + 1)->get()[0];
        $content_other->pos = $pos;
        $content_other->timestamps = false;
        $content_other->save();

        return redirect('admin');
    }
}
