@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 text-white rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">
                Benvenuto su Portfolio.92!
            </h1>

            <p class="col-md-8 fs-4">Questo è il sito dove avrai accesso al tuo portfolio con tutti i tuoi meravigliosi
                progetti!</p>
            <a href="{{ route('login') }}" class="btn btn-outline-danger btn-lg" type="button">Accedi</a>
        </div>
    </div>
@endsection
