<?php

namespace App\Http\Controllers;

use App\FileDirectory;
use App\Document;
use App\Course;
use Illuminate\Http\Request;
use Response;


class DirectoryController extends Controller
{
    //Tikai admini varēs izveidot un saglabāt jaunu directory.
    public function __construct() {
        $this->middleware('admin')->only(['create','store', 'edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('directory_show', array('documents' => Document::all()->where('is_accepted', '=', 1)->sortBy('id'), 'directories' => FileDirectory::all()->sortBy('name')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Directory_create skatā vajadzētu būt formai, kur ierakstīt jauno nosaukumu.
        return view('directory_create', array('courses' => Course::all()->sortBy('name')->pluck('name', 'id')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Requesto datus no formām.
        $data = $request->all();

        //Nosacījumi validēšanai.
        $rules = $rules = array(
            'name' => 'required|max:191',
            'course_id' => 'required'       
        );

        $this->validate($request, $rules);

        //Ja veiksmīga validācija, saglabā jauno Directory.
        $newDir = new FileDirectory();
        $newDir->name = $data['name'];
        $newDir->course()->associate(Course::findOrFail($data['course_id']));
        $newDir->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('directory_show', array('documents' => Document::get()->where('directory_id', '=', $id)->where('is_accepted', '=', 1)->sortBy('name'), 'current_dir' => $id));
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
}
