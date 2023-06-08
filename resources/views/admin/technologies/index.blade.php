@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <ul class="text-white project-list ">
            @foreach ($technologies as $technology)
                <li class="d-flex justify-content-between w-100 align-items-center">
                    <div>
                        <h4 class="fw-bold">{{ $technology->name }}</h4>
                    </div>

                    <div class="d-flex">
                        <a href="{{ route('admin.technologies.show', $technology) }}"><i
                                class="fa-solid fa-circle-info fs-4"></i></a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
