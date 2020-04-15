@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profil</div>

                    <div class="card-body">
                         <h1>Profil de {{ Auth::user()->name }}</h1>

                        <p>-Prénom: {{Auth::user()->name}}</p>
                        <p>-Email: {{Auth::user()->email}}</p>
                    </div>
                </div>
                <br><br>
                <a href="{{ route('post') }}"><button class="btn btn-success">Ajouter une annonce</button></a>
                <a href="{{ route('my_annonce') }}"><button class="btn btn-warning">Mes annonces</button></a>
                <br><br>
                <a href="{{ route('modification') }}"><button class="btn btn-primary">Modifier le profil</button></a>
                <a href="{{ route('delete') }}"><button class="btn btn-danger">Supprimer mon compte</button></a>
            </div>
        </div>
    </div>
@endsection
