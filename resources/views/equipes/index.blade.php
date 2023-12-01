@extends('layouts.app')

@section('content')
    <h1>Liste des Équipes</h1>

    @if(count($equipes) > 0)
        <ul>
            @foreach($equipes as $equipe)
                <li>{{ $equipe->EQUIPE_NOM }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucune équipe n'a été trouvée.</p>
    @endif
@endsection
