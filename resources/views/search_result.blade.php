@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Resultat</div>
                    <br><br>
                    <form method="post" action="/search" class="col-md-6">
                        @csrf
                        <input type="text" class="form-control" name="value" value="" placeholder="Rechercher..."><br>
                        @if($errors->has('value'))
                            <p class="help is-danger" style="color: red;">Aucun mot clé</p>
                        @endif
                        <button type="submit" class="btn btn-success">Rechercher</button><br>

                        <br><br>

                        @foreach($results as $result)
                            <div class="card">
                                <h5 class="card-title">{{ $result->titre }}</h5>
                                <p class="card-text">{{ $result->description }}</p>
                                <br>
                                <p class="card-text">{{ $result->prix }}€</p>
                                <a href="annonce/{{$result->id}}" class="btn btn-primary">Voir plus</a>
                            </div>
                        @endforeach
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
