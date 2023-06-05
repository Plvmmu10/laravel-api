@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="py-2">
            <button class="btn btn-outline-success"><a href="{{ route('admin.projects.create') }}">Add
                    Project</a></button>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <ul class="text-white project-list ">
            @foreach ($projects as $project)
                <li class="d-flex justify-content-between w-100 align-items-center">
                    <div>
                        <h4 class="fw-bold">{{ $project->name }}</h4>
                    </div>

                    <div class="d-flex">
                        <a href="{{ route('admin.projects.show', $project->slug) }}"><i
                                class="fa-solid fa-circle-info fs-4"></i></a>
                        <a href="{{ route('admin.projects.edit', $project->slug) }}"><i
                                class="fa-solid fa-pen-to-square fs-4 px-3"></i></a>

                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-transparent text-white border-0">
                                <a href="#">
                                    <i class="fa-regular fa-trash-can fs-4"></i>
                                </a>
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
