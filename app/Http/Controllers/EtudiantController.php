<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function listeEtudiants() 
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouterEtudiants()
    {
        return view('etudiant.ajouter');
    }
    public function ajouterEtudiantstraitement(Request $request) 
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'photo' => 'required'
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->photo = $request->photo;

        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$etudiant);
            $etudiant->photo = $filename;
        } 

        $etudiant->save();

        return redirect('/ajouter')->with('status','L\'etudiant a bien ete ajoute.');
    }

    public function updateEtudiants($id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function updateEtudiantstraitement(Request $request) 
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;

        $etudiant->update();

        return redirect('/etudiant')->with('status','L\'etudiant a bien ete modifie.');
    }

    public function deleteEtudiants($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status','L\'etudiant a bien ete supprime.');
        
    }

}