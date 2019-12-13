<?php

namespace App\Http\Controllers;

use App\Inscription;
use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $inscription =\App\Inscription::orderBy('created_at', 'DECS')->get();
       return view('inscription.index', compact('inscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = \App\Student::pluck('name','id');
        $academic__year = \App\Academic__year::pluck('name','id');
        return view('inscriptions.create', compact('student','academic__year'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscription = new Inscription();
        $inscription->date = $request->input('date');
        $inscription->amount = $request->input('amount');
        $inscription->student_id = $request->input('student_id');
        $inscription->academic__year_id = $request->input('academic__year_id');

        $inscription->save();
        return redirect('/inscription');
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
        $inscription = \App\Inscription::find($id);//on recupere le produit);
        $student = \App\Student::pluck('name','id');
        $academic__year = \App\Academic__year::pluck('name','id');
        return view('inscriptions.edit', compact('inscription','student','academic__year'));

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
        $inscription = \App\Inscription::find($id);
        if($inscription){
            $inscription->update([
                'date' => $request->input('date'),
                'amount' => $request->input('amount'),
                'student_id' => $request->input('student_id'),
                'academic__year_id' => $request->input('academic__year_id'),

            ]);
        }
        return redirect()->back();
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