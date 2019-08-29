<?php

namespace App\Http\Controllers;

use App\User;
use App\FileDirectory;
use App\DocumentEdit;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->only(['show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file_edit');    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'original_id' => 'required|integer',
            'name' => 'required|max:191',
            'description' => 'required',
            'directory_id' => 'required|integer',
            'path' => 'required'
        );

        $this->validate($request, $rules);

        //Ja izdevusies validācija, saglabā datubāzē.
        $newEdit = new DocumentEdit();
        $newEdit->original_id = $data['original_id'];
        $newEdit->name = $data['name'];
        $newEdit->description = $data['description'];
        $newEdit->editor()->associate(User::find(Auth::User()->id));
        $newEdit->fileDirectory()->associate(FileDirectory::find($data['directory_id']));
        $newEdit->path = $data['path'];
        $newEdit->save();

        return redirect('/directory');
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
        return view('file_edit', array('file' => Document::findOrFail($id), 'directories' => FileDirectory::all()->sortBy('name')->pluck('name','id')));
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
}
