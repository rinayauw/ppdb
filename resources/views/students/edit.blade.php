@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Students</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Students</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Students</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
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

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender" autofocus>
                                    @foreach(\App\Enums\GenderEnum::all() as $value => $label)
                                    <option value="{{ $value }}" {{ old('gender', $student->gender) == $value ? 'selected' : null }}>{{ $label }}</option>
                                    @endforeach
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Religion</label>
                                <select class="form-control @error('religion') is-invalid @enderror" name="religion" required autocomplete="religion" autofocus>
                                    @foreach(\App\Enums\ReligionEnum::all() as $value => $label)
                                    <option value="{{ $value }}" {{ old('religion', $student->religion) == $value ? 'selected' : null }}>{{ $label }}</option>
                                    @endforeach
                                </select>

                                @error('religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter ..." name="address" required autocomplete="address" autofocus>{{ old('address', $student->address) }}</textarea>
                                </div>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status" required autocomplete="status" autofocus>
                                    @foreach(\App\Enums\StudentStatusEnum::all() as $value => $label)
                                    <option value="{{ $value }}" {{ old('status', $student->status) == $value ? 'selected' : null }}>{{ $label }}</option>
                                    @endforeach
                                </select>

                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Major</label>
                                <select class="form-control @error('major_id') is-invalid @enderror" name="major_id" required autocomplete="major_id" autofocus>
                                    @foreach($majors as $major)
                                    <option value="{{ $major->id }}" {{ old('major_id', $student->major_id) == $major->id ? 'selected' : null }}>{{ $major->name }}</option>
                                    @endforeach
                                </select>

                                @error('major_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Extracurricular</label>
                                <select class="form-control @error('extracurricular_id') is-invalid @enderror" name="extracurricular_id" required autocomplete="extracurricular_id" autofocus>
                                    @foreach($extracurriculars as $extracurricular)
                                    <option value="{{ $extracurricular->id }}" {{ old('extracurricular_id', $student->extracurricular_id) == $extracurricular->id ? 'selected' : null }}>{{ $extracurricular->name }}</option>
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
</section>

@endsection