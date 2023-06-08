@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="myRow justify-content-center my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Dashboard of {{ Auth::user()->name }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Where do you want to go?</h4>

                        <div>
                            <ul class="list-style-none p-3">
                                <li class="p-3 m-2">
                                    <a href="{{ route('admin.projects.index') }}" class="text-decoration-none">
                                        <h4>Projects List
                                        </h4>
                                    </a>
                                </li>
                                <li class="p-3 m-2">
                                    <a href="{{ route('admin.technologies.index') }}" class="text-decoration-none">
                                        <h4>Technologies List
                                        </h4>
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
