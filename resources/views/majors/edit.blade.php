@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            Edit Major
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('majors.update', $major->id) }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $major->name) }}" required autocomplete="name" autofocus>

                            @error('name')
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