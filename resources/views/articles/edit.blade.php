@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            Edit Article
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $article->name) }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $article->description) }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>

                            @if($article->getFirstMediaUrl('photo'))
                            <img src="{{ $article->getFirstMediaUrl('photo') }}" alt="img" class="img-fluid d-block" width="300px">
                            @endif

                            <input type="file" class="form-control @error('photo') is-invalid @enderror mt-2" id="photo" name="photo" value="{{ old('photo') }}" autocomplete="photo" autofocus>

                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary text-center">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection