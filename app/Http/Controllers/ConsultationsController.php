<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;

class ConsultationsController extends Controller
{
    public function show($id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.show', ['consultation' => $consultation]);
    }
    public function index()
    {
        $consultations = Consultation::all();
        return view('consultations.index', ['consultations' => $consultations]);
    }
    public function create()
    {
        return view('consultations.create');
    }
    public function store(Request $request)
    {
        $consultation = new Consultation();
        error_log($request->name);

        $consultation->subject = $request->name;
        $consultation->description = $request->content;
        $consultation->user_id = 2;
        $consultation->save();
        return redirect('consultations');
    }
    public function edit($id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.edit', ['consultation' => $consultation]);
    }
    public function update($id, Request $request)
    {
        $consultation = Consultation::find($id);
        $consultation->subject = $request->name;
        $consultation->description = $request->content;
        $consultation->save();
        return redirect('consultations');
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
