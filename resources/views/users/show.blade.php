@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center mt-3">
                    <div class="h4 pb-2 mb-4 border-bottom border-3 border-dark">
                        <h3>Profile User</h3>
                    </div>
                    <img src="{{ $user->getFirstMediaUrl('avatar') }}" class="border border-dark border-2 rounded-circle w-25" alt="img">
                    <div class="p-3 text-center">
                        <h4 class="fw-bold"> {{ $user->name }}</h4>
                        <h4>{{ $user->email }}</h4>
                        <h4>{{ $user->role }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection