@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-12 showColTech">
            <div class="card">
                <div class="card-image m-4">
                    <img src="/img/{{ $technology->image }}" alt="{{ $technology->name }}">
                </div>

                <div class="card-body">
                    <h2>{{ $technology->name }}</h2>
                    <div class="description p-2">
                        <p>{{ $technology->description }}</p>
                    </div>

                    <div class="pt-5">
                        <button class="btn btn-outline-success">
                            <a href="{{ route('admin.technologies.index') }}">Technologies List</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
