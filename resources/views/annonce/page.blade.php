@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-8">
                        @foreach($results as $result)
                            <h1>{{ $result->titre }}</h1>
                            <br><br>
                            <h3>{{ $result->prix }}</h3>

                            <br><br><br>

                            <p>{{ $result->description }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
