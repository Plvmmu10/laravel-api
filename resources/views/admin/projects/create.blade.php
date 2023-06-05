@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-50 text-white mt-5">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" ">
                                <div id="nameText" class="form-text text-white">Choose your project name</div>
                            </div>

                            {{-- Image --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" class="form-control" id="image" name="image" ">
                    <div id="imageText" class="form-text text-white">Choose your project image</div>
                </div>

                {{-- Name --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                    <div id="descriptionText" class="form-text text-white">Choose your project description</div>
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
