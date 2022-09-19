<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        return view('Frontend.equipe.index',[
            'equipes'=>$equipes,
            'continents'=>$continents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        
        return view('Backend.equipe.create',[
            'equipes'=>$equipes,
            'continents'=>$continents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $equipe = new Equipe;
        
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;

        $equipe->continent_id = $request->continents;
        
        $equipe->save();

        return redirect()->route('equipe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $show = Equipe::find($id);
        
        return view('Frontend.equipe.show',[
            'equipe' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Equipe::find($id);
        $continents = Continent::all();

        // dd($continents);
        return view('Backend.equipe.edit',[
            'equipe' => $edit,
            'continents' => $continents
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipes = Equipe::find($id);

        $equipes->nom = $request->nom;
        $equipes->ville = $request->ville;

        $equipes->continent_id = $request->continents;
        
        $equipes->save();

        return redirect()->route('equipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Equipe::find($id);
        $delete->delete();
        return redirect()->route('equipe.index');
    }
}
