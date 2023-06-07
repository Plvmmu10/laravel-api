@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-12 showCol">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $project->image }}" alt="{{ $project->name }}">
                </div>

                <div class="card-body">
                    <h2>{{ $project->name }}</h2>
                    <div class="description p-2">
                        <p>{{ $project->description }}</p>
                    </div>

                    <div>

                        <div class="tech-img mt-5">
                            <img src="/img/{{ $project->technology->image }}">
                        </div>
                    </div>

                    <div class="pt-5">
                        <button class="btn btn-outline-success">
                            <a href="{{ route('admin.projects.index') }}">Project List</a>
                        </button>

                        <button class="btn btn-outline-primary">
                            <a href="{{ route('admin.projects.edit', $project->slug) }}">Edit</a>
                        </button>

                        <button class="btn btn-outline-danger">
                            <a href="{{ route('admin.projects.destroy', $project->slug) }}">Delete</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
