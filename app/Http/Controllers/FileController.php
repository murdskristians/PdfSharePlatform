<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Document;
use App\DocumentEdit;
use App\FileDirectory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('directory_show', array('documents' => Document::all()->where('is_accepted', '=', 1)->sortBy('id')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file_create', array('directories' => FileDirectory::all()->sortBy('name')->pluck('name','id')));
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
            'name' => 'required|max:191',
            'description' => 'required|max:191',
            'directory_id' => 'required|integer|min:1',
            'path' => 'required|mimes:png,jpeg,jpg,doc,docx,pdf'
        );

        $this->validate($request, $rules);

        //Iegūst faila nosaukumu.
        $fileName = $request->file('path')->getClientOriginalName();

        // Pārbauda vai fails jau neeksistē.
        if(file_exists(base_path().'/storage/app/public/'.$fileName)) {
            return redirect('/file/create');
        }

        //Novieto failu pie storage/files.
        $request->file('path')->move(
            base_path() . '/storage/app/public/', $fileName
        );

        //Ja izdevusies validācija, saglabā datubāzē.
        $newFile = new Document();
        $newFile->name = $data['name'];
        $newFile->description = $data['description'];
        $newFile->author()->associate(User::find(Auth::User()->id));   //Cerams, ka iegūs User ID :D .
        $newFile->fileDirectory()->associate(FileDirectory::find($data['directory_id']));
        $newFile->path = $fileName;
        $newFile->save();  
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = Document::findOrFail($id);
        $comments = Comment::all()->where('document_id', '=', $id);
        return view('file_show', array('file' => $file, 'comments' => $comments));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('file_edit');
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
        $file = Document::findOrFail($id);
        $edits = DocumentEdit::all()->where('original_id', '=', $id);
        $comments = Comment::all()->where('document_id', '=', $id);

        Storage::delete('public/'.$file->path);

        foreach ($edits as $edit)
        {
            $edit->delete();
        }
            
        foreach ($comments as $comment)
        {
            $comment->delete();
        }
        $file->delete();

        return redirect('/directory');
    }

}
