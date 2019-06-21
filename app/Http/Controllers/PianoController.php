<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;
use App\Couleur;

class PianoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAllPianos()
    {
        $pianos = Piano::All();
        $pianos->load('couleur');
        
        // foreach ($pianos as $piano) {
        //     dump($piano);
        // }die;
        
        return view('pianos.get_all_pianos', compact('pianos'));
    }

    public function createPiano()
    {
        $couleurs = Couleur::All();

        return view('pianos.create_piano', compact('couleurs'));
    }

    public function storePiano(Request $request)
    {
        // dd($request);
        //Create New Objet Piano.
        $piano = new Piano([
            'marque' => $request->get('marque'),
            'couleur_id' => $request->get('couleur_id'),
            'annee' => $request->get('annee'),
        ]);
        
        $piano->save();//save the new Objet Piano.

        return redirect('/pianos')->with('success', 'piano créé avec succès!');
    }

    public function editPiano($id)
    {
        $couleurs = Couleur::All();

        $piano = Piano::find($id);

        return view('pianos.edit_piano', compact('couleurs', 'piano'));
    }
    
    public function updatePiano($id, Request $request)
    {
        $piano = Piano::find($id);
        //dd($piano);
        $piano->marque = $request->get('marque');
        $piano->couleur_id = $request->get('couleur_id');
        $piano->annee = $request->get('annee');

        $piano->save();
        return redirect('/pianos')->with('success', 'piano modifié avec succès!');
    }

    public function deletePiano($id)
    {
        $piano = Piano::find($id);

        $piano->delete();

        return redirect('/pianos')->with('success', 'piano suprimé avec succès!');
        
    }
}