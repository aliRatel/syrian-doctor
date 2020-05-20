<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Support\Facades\Auth;

class ConsultationsController extends Controller
{
    public function show($id)
    {
        $consultation = Consultation::find($id);

        if($consultation->user_id==Auth::user()->id || Auth::user()->role_id==2 )
        return view('consultations.show', ['consultation' => $consultation]);
    }
    public function index()
    {
        if(Auth::user()->role_id==2)
        $consultations = Consultation::all()->sortByDesc("created_at");
        else
        $consultations = Consultation::all()->where('user_id', '=', Auth::user()->id)->sortByDesc("created_at");
        return view('consultations.index', ['consultations' => $consultations]);
    }
    public function create()
    {
        return view('consultations.create');
    }
    public function store(Request $request)
    {

        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors(['message'=>'wrong captcha']);
        } else {
            $consultation = new Consultation();
            error_log($request->name);

            $consultation->subject = $request->name;
            $consultation->description = $request->content;
            $consultation->user_id = Auth::user()->id;
            $consultation->save();
            return redirect('consultations');        }

    }
    public function edit($id)
    {
        $consultation = Consultation::find($id);

        return view('consultations.edit', ['consultation' => $consultation]);
    }
    public function update($id, Request $request)
    {
        $consultation = Consultation::find($id);
        if($consultation->user_id==Auth::user()->id) {
        $consultation->subject = $request->name;
        $consultation->description = $request->content;
        $consultation->save();
        return redirect('consultations');
    }
    }
    public function destroy($id)
    {

        Consultation::destroy($id);

        return back();
    }

    public function answer($id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.answer', ['consultation' => $consultation]);
    }
    public function storeAnswer($id,Request $request)
    {
        $consultation = Consultation::find($id);
error_log($request->answer);
        $consultation->answer =$request->answer;
        $consultation->save();
        return redirect('consultations');
    }
}
