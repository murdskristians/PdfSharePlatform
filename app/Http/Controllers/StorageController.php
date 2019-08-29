<?php

namespace App\Http\Controllers;

use File;
use Response;
use App\Document;
use App\FileDirectory;
use Illuminate\Http\Request;

class StorageController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function getFile($filename)
        {
            return response()->download(storage_path('app/public/'.$filename));
        }

        public function openFile($filename)
        {
            return response()->download(storage_path("app/public/".$filename), null, [], null);
        }

        // public function asdf()
        // {
        //     $file = storage_path('app\public\Nedzest_KD1.pdf');
        //     $response = Response::make($file, 200);
        //     $response->header('Content-Type', 'application/pdf');
        //     return $response;
        // }

        public function index()
        {
            $f = 'storage\Nedzest_KD1.pdf';
            if (File::isFile($f))
            {
                $file = File::get($f);
                $response = Response::make($file, 200);

                $response->header('Content-Type', 'application/pdf');

                return view('file_show', array('response' => $response, 'file' => Document::findOrFail(1), 'directories' => FileDirectory::all()->sortBy('name')));
            }
        }
}
