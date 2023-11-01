<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Etudiant;
use App\Http\Controllers\EtudiantController;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AccueilController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function connexionAdmin(Request $request) 
    {
        $request->validate([
            'nomUtil' => 'required',
            'mdp' => 'required'
        ]);
        $user = Admin::where('nomUtil','=',$request->nomUtil)->first();
        if ($user) {
            $request->session()->put('mdp',$user->mdp);
            return redirect('/etudiant');
        } else {
                return back()->with('fail','This email is not registered.');
        }
        //return redirect('/etudiant');
    }

    public function connAd() 
    {
        return view('admin.connexion');
    }

    public function insAd()
    {
        return view('admin.inscription');
    }
    public function inscrireAdmin(Request $request)
    {
        
        $request->validate([
            'nomUtil' => 'required',
            'mdp' => 'required'
        ]);
        $admin = new Admin();
        $admin->nomUtil = $request->nomUtil;
        $admin->mdp = $request->mdp;
      
        $admin->save();

        return redirect('/connexion')->with('status','L\'etudiant a bien ete ajoute.');
    }

}