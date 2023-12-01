<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', ['equipes' => $equipes]);
    }

    // Vous pouvez ajouter d'autres méthodes en fonction de vos besoins

    // Exemple d'une méthode pour afficher les détails d'une équipe
    public function show($equipeId)
    {
        $equipe = Equipe::find($equipeId);

        if (!$equipe) {
            // Gérer le cas où l'équipe n'est pas trouvée
            abort(404, 'Équipe non trouvée');
        }

        return view('equipes.show', ['equipe' => $equipe]);
    }


    public function ajouterEquipe()
    {
        Equipe::create([
            'EQUIPE_ID' => 'EQUIPE2',
            'EQUIPE_NOM' => 'MAN UTD',
        ]);

        return response()->json(['message' => 'Équipe ajoutée avec succès']);
    }
}
