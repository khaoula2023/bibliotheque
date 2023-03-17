<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivresController extends Controller
{
    public function index()
    {
        $livre = Livre::latest()->paginate(5);
      
        return view('Livres.index',compact('livre'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Livres.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'Code_interne' => 'required',
            'Code_externe' => 'required',
            'ISBN' => 'required',
            'Titre' => 'required',
            'Auteur' => 'required',
            'Classement' => 'required',
            'Classification' => 'required',
            'Nom_edition' => 'required',
            'Lieu_edition' => 'required',
            'Date_edition' => 'required',
            'Nombre_de_pages' => 'required',

        ]);
      
      
        Livre::create($request->all());
       
        return redirect()->route('Livres.index')
                        ->with('success','Livre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicines  $Livres
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $Livres)
    {
        return view('Livres.show',compact('Livres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livre  $Livres
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        return view('Livres.edit',compact('livres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $livres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livres)
    {
        $request->validate([
            'id' => 'required',
            'Code_interne' => 'required',
            'Code_externe' => 'required',
            'ISBN' => 'required',
            'Titre' => 'required',
            'Auteur' => 'required',
            'Classement' => 'required',
            'Classification' => 'required',
            'Nom_edition' => 'required',
            'Lieu_edition' => 'required',
            'Date_edition' => 'required',
            'Nombre_de_pages' => 'required',

        ]);
      
      
        $livres->update($request->all());
      
        return redirect()->route('Livres.index')
                        ->with('success','livre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livres  $livres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $Livres)
    {
        
        $Livres->delete();
       
        return redirect()->route('Livres.index')
                        ->with('success','livre deleted successfully');
    }
}
