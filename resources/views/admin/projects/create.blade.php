@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-50 text-white mt-5">
            {{-- Errors Section --}}
            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            @endif
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="name"
                        name="name">
                    <div id="nameText" class="form-text text-white">Choose your project name</div>

                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image">
                    <div id="imageText" class="form-text text-white">Choose your project image</div>

                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description"></textarea>
                    <div id="descriptionText" class="form-text text-white">Choose your project description</div>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Technology --}}
                <div class="mb-3">
                    <label for="technology_id">Technology</label>
                    <select name="technology_id" id="technology_id"
                        class="form-control @error('technology_id') is-invalid @enderror">
                        <option value="">Choose Technology</option>
                        @foreach ($technologies as $technology)
                            <option value="{{ $technology->id }}">
                                {{ $technology->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('technology_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tags --}}
                <div class="form-group row d-flex">
                    <p>Choose your Tags:</p>
                    @foreach ($tags as $tag)
                        <div class="col-1">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-check-input"
                                {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                            <label for="" class="form-check-label">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-outline-primary">Create</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
                <button class="btn btn-outline-success">
                    <a href="{{ route('admin.projects.index') }}" class="text-decoration-none text-white">Go
                        Back</a>
                </button>
            </form>
        </div>

    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
