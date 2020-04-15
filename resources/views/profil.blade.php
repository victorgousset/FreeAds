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
                <a href="{{ route('modification') }}"><button class="btn btn-primary">Modifier le profil</button></a>
                <a href="{{ route('delete') }}"><button class="btn btn-danger">Supprimer mon compte</button></a>
            </div>
        </div>
    </div>
@endsection
