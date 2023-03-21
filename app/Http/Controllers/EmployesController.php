<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    
    public function index()
    {
        $Employe = Employe::latest()->paginate(5);
      
        return view('Employes.index',compact('Employe'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employes.create');

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
            'Nom' => 'required',
            'Prenom' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'Date_de_naissance' => 'required',
            'Adresse' => 'required',

        ]);
      
      
        Employe::create($request->all());
       
        return redirect()->route('employe.index')
                        ->with('success','employe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employes  $Employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employes)
    {
        return view('Employe.show',compact('Employes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $Employes
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('Employes.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $Employes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employes)
    {
        $request->validate([
            'id' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Email' => 'required',
            'Telephone' => 'required',
            'Date_de_naissance' => 'required',
            'Adresse' => 'required',
            

        ]);
      
      
        $employes->update($request->all());
      
        return redirect()->route('Employees.index')
                        ->with('success','Employe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employes  $Employes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $Employes)
    {
        
        $Employes->delete();
       
        return redirect()->route('Employes.index')
                        ->with('success','Employe deleted successfully');
    }
}








    