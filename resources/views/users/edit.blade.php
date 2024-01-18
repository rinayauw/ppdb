@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            Edit User
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required autocomplete="role" autofocus>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : null }}>Admin</option>
                                <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : null }}>Teacher</option>
                            </select>

                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 border border-2 rounded p-3 bg-secondary bg-opacity-25">
                            <label for="password" class="form-label">Change Password (Optional, fill if you want to change your current password)</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>

                            @if($user->getFirstMediaUrl('avatar'))
                            <img src="{{ $user->getFirstMediaUrl('avatar') }}" alt="img" class="img-fluid d-block" width="300px">
                            @endif

                            <input type="file" class="form-control @error('avatar') is-invalid @enderror mt-2" id="avatar" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar" autofocus>

                            @error('avatar')
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