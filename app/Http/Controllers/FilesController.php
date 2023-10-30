<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index(){
        return View('files.index');
    }

    public function store(Request $request){
        $filename =  uniqid() . "." .  $request->document->getClientOriginalExtension();
        $path = "/prueba";
        $request->document->storeAs("/public" . $path, $filename);
        $file = File::create(['path' => $path, 'name' => $filename]);
        return view('files.index')->with('file', $file);
    }
}
