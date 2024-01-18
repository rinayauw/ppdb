@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ $article->getFirstMediaUrl('photo') }}" class="img-fluid w-100" alt="img">
                <div class="p-5 text-center">
                    <h3>{{ $article->name }}</h3>
                    <h5 class="mt-5">{{ $article->description }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection