@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            Show Major
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <b>Name</b>
                            </div>
                            <div class="col-9">
                                : {{ $major->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection