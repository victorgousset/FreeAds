@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-6">

                    <h1>Modification du profil: </h1>

                    <form action="/modification_profil" method="post">
                        @csrf
                        <label>Name</label><input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}"><br>
                        <label>Email</label><input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}"><br>
                        @if($errors->has('name') || $errors->has('email'))
                            <p class="help is-danger" style="color: red;">Tous les champs ne sont pas remplis</p>
                        @endif
                        <div class="control">
                            <button class="button is-link btn btn-primary" type="submit">Modifier mon Profil</button>
                        </div>
                    </form>


                    <h1>Modification du mot de passe: </h1>

                    <form action="/modification_password" method="post">
                        @csrf
                        <label>Mot de passe</label><input class="form-control" type="text" name="password" ><br>
                        <label>Confirmation</label><input class="form-control" type="email" name="password_confirm"><br>
                        @if($errors->has('password') || $errors->has('password_confirm'))
                            <p class="help is-danger" style="color: red;">Tous les champs ne sont pas remplis</p>
                        @endif
                        <div class="control">
                            <button class="button is-link btn btn-primary" type="submit">Modifier mon mot de passe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
