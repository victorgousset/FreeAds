@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-8">

                        <h1>Mes annonces</h1>

                        @foreach($results as $result)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $result->titre }}</h5>
                                    <p class="card-text"{{ $result->description }}></p>
                                    <a href="{{ route('annonce', ['id' => $result->id]) }}" class="btn btn-primary">Voir plus</a>
                                    <a href="{{ route('ModifAnnonce', ['id' => $result->id]) }}" class="btn btn-warning">Modifier</a>
                                    <a href="{{ route('DeleteAnnonce', ['id' => $result->id]) }}" class="btn btn-danger">Supprimer</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
