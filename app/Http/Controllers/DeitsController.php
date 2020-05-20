<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use App\Deit;
class DeitsController extends Controller
{

    public function show($id)
    {
        $deit = Deit::find($id);
        return view('deits.show', ['deit' => $deit]);
    }
    public function index()
    {
        $deits = Deit::all();
        return view('deits.index', ['deits' => $deits]);
    }
    public function create()
    {
        return view('deits.create');
    }
    public function store(Request $request)
    {
        $deit = new Deit();
        error_log(request()->hasFile('img'));
        if($request->hasFile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $path = 'deits/'.$file->getFilename().Time().'.'.$extension;
             Storage::disk('public')->put($path,  File::get($file));

                    error_log('deits/'.$file->getFilename().'.'.$extension);
            $deit->image=$path;


        }

        error_log($request->name);

        $deit->name = $request->name;
        $deit->content = $request->content;
        $deit->save();
        return redirect('deits');
    }
    public function edit($id)
    {
        $deit = Deit::find($id);
        return view('deits.edit', ['deit' => $deit]);
    }
    public function update($id, Request $request)
    {
        $deit = Deit::find($id);
        $deit->name = $request->name;
        $deit->content = $request->content;
        $deit->save();
        return redirect('deits');
    }

    public function destroy($id)
    {

        Deit::destroy($id);

        return back();
    }
}
