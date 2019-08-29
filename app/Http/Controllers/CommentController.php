<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Document;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pieprasa datus no formas.
        $data = $request->all();

        //Validācijas nosacījumi.
        $rules = $rules = array(
            'user_id' => 'required',
            'document_id' => 'required',
            'comment' => 'required',
        );

        $this->validate($request, $rules);

        $newComment = new Comment();
        $newComment->user()->associate(User::find($data['user_id']));
        $newComment->document()->associate(Document::find($data['document_id']));
        $newComment->text = $data['comment'];
        $newComment->save();

        return redirect('/file/'.$data['document_id']);
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
        //
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
        $data = $request->all();

        $comment = Comment::findOrFail($id);
        // $comment->user()->associate(User::find($data['user_id']));
        // $comment->document()->associate(Document::find($data['document_id']));
        $comment->reported = 1;
        $comment->update();

        return redirect('/file/'.$data['document_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
