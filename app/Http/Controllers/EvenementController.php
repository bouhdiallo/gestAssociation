<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Models\Evenement as ModelsEvenement;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('evenment.ajoutEvenma'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'libelle' => 'required|alpha',
            'date_limite_inscription' => 'required|date:Y-m-d',
            'description' => 'required|regex:/^[a-zA-Z ]+$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ajout de règles pour les images
            'is_clotured' => 'required',
            'date_evenement' => 'required|date:Y-m-d',
        ]);
    
        $evenma = new Evenement();
        $evenma->libelle = $request->libelle;
        $evenma->date_limite_inscription = $request->date_limite_inscription;
        $evenma->description = $request->description;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $evenma->image = $filename;
        }
    
        $evenma->is_clotured = $request->is_clotured;
        $evenma->date_evenement = $request->date_evenement;
        $evenma->save();
    
        return back();
    }
    



        // if ($request->file('image')){
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') .$file->getClientOriginalName();
        //     $file -> move(public_path('public/image'), $filename);
        //     $evenma['image'] = $filename;

        // }
       
    

    /**
     * Display the specified resource.
     */



     public function listage()
     {
         $evenements = Evenement::all();
         return view('evenment.listeEvenma', ['evenements' => $evenements]);
     }



    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $evens = Evenement::find($id);
        return view('evenment.update', compact('evens'));
    }



    public function traitementEvenma (Request $request, $id)
    {


        $request->validate([
            'libelle' => 'required|alpha',
            'date_limite_inscription' => 'required|date:Y-m-d',
            'description' => 'required|regex:/^[a-zA-Z ]+$/',
            'image' => 'required',
            'is_clotured' => 'required',
            'date_evenement' => 'required|date:Y-m-d',
        ]);

        $evenma = Evenement::find($id);
        $evenma->libelle = $request->libelle;
        $evenma->date_limite_inscription = $request->date_limite_inscription;
        $evenma->description = $request->description;
        $evenma->image = $request->image;
        $evenma->is_clotured = $request->is_clotured;
        $evenma->date_evenement = $request->date_evenement;
        $evenma->update();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evenma = Evenement::find($id);
        $evenma->delete();
        return back();
    }


}
