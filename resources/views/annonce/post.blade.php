@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-8">

                        <h1>Poster une annonce</h1>

                        <form action="/annonce/post" method="post" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="text" name="titre" placeholder="Titre"><br>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea><br>
                            <label>Image<input type="file" name="image" placeholder="Image"></label><br>
                            <input class="form-control" type="text" name="prix" placeholder="Prix"><br>

                            @if($errors->has('titre') || $errors->has('description'))
                                <p class="help is-danger" style="color: red;">Tous les champs ne sont pas remplis</p>
                            @endif
                            <div class="control">
                                <button class="button is-link btn btn-primary" type="submit">Modifier mon Profil</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
