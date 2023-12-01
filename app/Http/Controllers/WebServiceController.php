<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return response()->json($equipes);
    }
    // public function show($nom)
    // {
    //     $decodedNom = urldecode($nom);
    //     $equipe = Equipe::findByNom($decodedNom);
    //     return response()->json($equipe);
    // }
    public function show($nom)
    {
        $decodedNom = urldecode($nom);
        $equipe = Equipe::findByNom($decodedNom)->first();
        return response()->json($equipe);
    }

}
