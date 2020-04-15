@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profil</div>

                    <div class="card-body">
                        <p>{{ Auth::user()->name }}, etes vous sur de vouloir supprimer votre compte ?</p>

                        <br>

                        <a href="/delete_confirm"><button class="btn btn-danger">OUI, SUPPRIMER LE COMPTE</button></a>
                        <a href="/profil"><button class="btn btn-success">NON</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
