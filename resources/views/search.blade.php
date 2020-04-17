@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Recherche</div>
                    <br><br>
                        <form method="post" action="/search" class="col-md-6">
                            @csrf
                            <input type="text" class="form-control" name="value" placeholder="Rechercher..."><br>
                            @if($errors->has('value'))
                                <p class="help is-danger" style="color: red;">Aucun mot clé</p>
                            @endif
                            <button type="submit" class="btn btn-success">Rechercher</button><br>
                        </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
