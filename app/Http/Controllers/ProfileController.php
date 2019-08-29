<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('admin')->only(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $reported = Comment::where('reported', '=', 1)->count();
        return view('profile_admin', array('users' => User::all()->sortBy('name'), 'admin' => $user, 'reported' => $reported));
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
            'id' => 'required|integer',
            'name' => 'required|max:191',
            'email' => 'required|email',
            'image' => 'mimes:png,jpg,gif,jpeg',
        );

        $this->validate($request, $rules);

        $user = User::findOrFail($data['id']);

        if (isset($data['image'])) {
            //Iegūst faila nosaukumu.
            $fileName = $request->file('image')->getClientOriginalName();

            // Pārbauda vai fails jau neeksistē.
            if(file_exists(base_path().'/storage/app/public/pic/'.$fileName)) {
                $fileName=date("Y-m-d").$fileName;
            }

            //Novieto failu pie storage/files.
            $request->file('image')->move(
                base_path() . '/storage/app/public/pic/', $fileName
            );
        }
        else {
            $fileName = $user->image;
        }

        $user->name = $data['name'];
        $user->bio = $data['bio'];
        $user->email = $data['email'];
        $user->image = $fileName;
        $user->save();

        return redirect('/profile/'.$data['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $files = Document::all()->where('author_id', '=', $id)->sortBy('name');
        $edits = Document::all()->where('editor_id', '=', $id)->sortBy('name');

        return view('profile_show', array('user' => $user, 'files' => $files, 'edits' => $edits));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('profile_edit', array('user' => User::findOrFail($id)));
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
