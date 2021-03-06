<?php

namespace App\Http\Controllers;

use App\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::All();
        $filiere = \App\Filiere::orderBy('created_at', 'DESC')->get();
        return view('filieres.index', compact('filieres') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filiere = \App\Filiere::pluck('name','id');
        return view('filieres.create')->with('success','Filiere cree avec succes');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|min:5',
            'description' => 'max:1000000'
        ]);

        $filiere = new Filiere();

        $filiere->name = $request->input('name');
        $filiere->description = $request->input('description');
        $filiere->save();
        return redirect('/filiere');

        
    }    
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filierer = \App\Filierer::findOrfail($id);;
        return view('filieres.show', compact('filierer')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = \App\Filiere::findOrfail($id);;
        return view('filieres.edit', compact('filiere'));

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
        $filiere = \App\Filiere::find($id);
        $input = $request->all(); 

        $update = $filiere->update($input);
    
        if($update){
            return redirect()->route('filieres');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere =Filiere::findOrFail($id);
        //dd($matter);
        $delete = $filiere->delete();
        
        if($delete){
            return redirect()->route('filieres');
        }
    }
}

