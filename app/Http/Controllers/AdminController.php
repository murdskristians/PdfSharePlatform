<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Document;
use App\DocumentEdit;
use App\FileDirectory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(1);
        $file_edits = DocumentEdit::all();
        $new_files = Document::all()->where('is_accepted', '=', 0)->sortBy('id');
        $reported = Comment::where('reported', '=', 1)->count();


        return view('admin', array('edits' => $file_edits, 'files' => $new_files, 'user' => $user, 'reported' => $reported));
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
        //
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
        //
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

    //Parāda oriģinālo failu un tā editu.
    public function approveEdit($id) 
    {
        $edit = DocumentEdit::findOrFail($id);
        $original = Document::findOrFail($edit->original_id);
        return view('approve_edit', array('file' => $original, 'edit' => $edit));
    }

    //Apstiprina editu (izmaina oriģinālā faila vērtības)
    public function changeFile($id)
    {
        $file_edit = DocumentEdit::findOrFail($id);
        $original_file = Document::findOrFail($file_edit->original_id);

        $original_file->name = $file_edit->name;
        $original_file->description = $file_edit->description;
        $original_file->editor()->associate(User::find($file_edit->editor_id));
        $original_file->fileDirectory()->associate(FileDirectory::find($file_edit->directory_id));
        $original_file->is_accepted = 1;
        $original_file->save();

        $file_edit->delete();

        $message = "Izmaiņas failam ' ". $original_file->name ." ' apstiprinātas!";

        return redirect('/admin')->with('success', $message);
    }

    public function removeEdit($id)
    {
        $file_edit = DocumentEdit::findOrFail($id);
        $message = "Izmaiņas failam ' ". $file_edit->name ." ' noraidītas!";
        $file_edit->delete();

        return redirect('/admin')->with('danger', $message);
    }

    public function approveFile($id)
    {
        $file = Document::findOrFail($id);
        return view('approve_file', array('file' => $file,));
    }

    public function acceptFile($id)
    {
        $file = Document::findOrFail($id);
        $file->is_accepted = 1;
        $file->save();
        $message = "Fails pievienots!";

        return redirect('/admin')->with('success', $message);
    }

    public function removeFile($id)
    {
        $file = Document::findOrFail($id);
        $file->delete();
        $message = "Fails noraidīts!";

        return redirect('/admin')->with('danger', $message);
    }

    public function reportedIndex()
    {
        $admin = User::findOrFail(1);
        $comments = Comment::all()->where('reported', '=', 1);
        $reported = Comment::where('reported', '=', 1)->count();
        return view('admin_reported', array('comments' => $comments, 'user' => $admin, 'reported' => $reported));
    }

    public function approveComment($id)
    {
        $comment = Comment::findOrFail($id);

        $comment->reported = 0;
        $comment->save();
        $message = "Komentārs atstāts!";

        return redirect('/reported')->with('success', $message);
    }

    public function destroyComment($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        $message = "Komentārs veiksmīgi izdzēsts!";

        return redirect('/reported')->with('danger', $message);
    }
}
