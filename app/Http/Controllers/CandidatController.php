<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
class CandidatController extends Controller
{
    public function index()
    {
        $candidatsmiss = Candidat::orderBy('votes','desc')->where('categorie','miss')->get();
        $candidatsmaster = Candidat::orderBy('votes','desc')->where('categorie','master')->get();
        $candidats = Candidat::orderBy('votes','desc')->get();
        // dd($candidatsmiss);

        return view('index',compact('candidats','candidatsmiss','candidatsmaster'));
    }
    public function getCandidats()
    {
        $candidats = Candidat::orderBy('votes','desc')->get();
        foreach($candidats as $candidat)
        {
            // $candidat->lien = 'brillancevote/'.$candidat->code;
            $candidat->lien = route('voter', $candidat->code);
        }
        return view('admin',compact('candidats'));
    }
    public function addVote($code)
    {
        // dd($code);
        $candidat = Candidat::firstWhere('code',$code);
        // dd($candidat);
        $candidat->votes +=1;
        $candidat->code = fake()->text(25);
        $candidat->save();
        echo '<script> alert("vote effectué avec succès")</script>';
        return redirect()->route('notif');;
    }
}
