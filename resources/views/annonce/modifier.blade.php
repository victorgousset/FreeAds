@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-8">
                        <h1>Modifier mon annonce</h1>

                        @foreach($results as $result)

                         <form method="post" action="/annonce/modifier/{{ $result->id }}">
                             @csrf
                            <input  class="form-control" type="text" name="titre" value="{{ $result->titre }}" placeholder="Titre"><br>
                             <textarea class="form-control" name="description" placeholder="Description">{{ $result->description }}</textarea><br>
                             <input  class="form-control" type="text" name="prix" value="{{ $result->prix }}" placeholder="Prix"><br>
                             <button class="btn btn-success" type="submit">Modifier l'annonce</button>
                             @if($errors->has('titre') || $errors->has('description') || $errors->has('prix'))
                                 <p class="help is-danger" style="color: red;">Tous les champs ne sont pas remplis</p>
                             @endif
                         </form>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
