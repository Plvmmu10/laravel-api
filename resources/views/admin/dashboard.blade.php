@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="myRow justify-content-center my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Dashboard di {{ Auth::user()->name }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Ecco la lista di tutti i tuoi progetti!</h4>

                        <div>
                            <ul class="list-style-none p-3">
                                <li class="p-3 m-2">
                                    <a href="#" class="text-decoration-none">
                                        laravel-auth
                                    </a>
                                </li>

                                <li class="p-3 m-2">
                                    <a href="#" class="text-decoration-none">
                                        html-css-discord
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
