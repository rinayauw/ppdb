@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            Edit Student
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $student->name) }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="birth" class="form-label">Birth</label>
                            <input type="date" class="form-control @error('birth') is-invalid @enderror" id="birth" name="birth" value="{{ old('birth', $student->birth) }}" required autocomplete="birth" autofocus>

                            @error('birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required autocomplete="gender" autofocus>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : null }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : null }}>Female</option>
                            </select>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="religion" class="form-label">Religion</label>
                            <select class="form-select @error('religion') is-invalid @enderror" id="religion" name="religion" required autocomplete="religion" autofocus>
                                <option value="islam" {{ old('religion') == 'islam' ? 'selected' : null }}>Islam</option>
                                <option value="kristen" {{ old('religion') == 'kristen' ? 'selected' : null }}>Kristen</option>
                                <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : null }}>Hindu</option>
                                <option value="konghucu" {{ old('religion') == 'konghucu' ? 'selected' : null }}>Konghucu</option>
                                <option value="buddha" {{ old('religion') == 'buddha' ? 'selected' : null }}>Buddha</option>
                            </select>

                            @error('religion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $student->address) }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required autocomplete="status" autofocus>
                                <option value="pending" {{ old('status') == 'pending' ? 'selected' : null }}>Pending</option>
                                <option value="accepted" {{ old('status') == 'accepted' ? 'selected' : null }}>Accepted</option>
                                <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : null }}>Rejected</option>
                            </select>

                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="major_id" class="form-label">Major</label>
                            <select class="form-select @error('major_id') is-invalid @enderror" id="major_id" name="major_id" required autocomplete="major_id" autofocus>
                                @foreach($majors as $major)
                                <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : null }}>{{ $major->name }}</option>
                                @endforeach
                            </select>

                            @error('major_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="extracurricular_id" class="form-label">Extracurricular</label>
                            <select class="form-select @error('extracurricular_id') is-invalid @enderror" id="extracurricular_id" name="extracurricular_id" required autocomplete="extracurricular_id" autofocus>
                                @foreach($extracurriculars as $extracurricular)
                                <option value="{{ $extracurricular->id }}" {{ old('extracurricular_id') == $extracurricular->id ? 'selected' : null }}>{{ $extracurricular->name }}</option>
                                @endforeach
                            </select>


                            @error('extracurricular_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>

                            @if($student->getFirstMediaUrl('photo'))
                            <img src="{{ $student->getFirstMediaUrl('photo') }}" alt="img" class="img-fluid d-block" width="300px">
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