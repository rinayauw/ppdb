@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            List of Major
                        </div>
                        <div class="flex-shrink-0">
                            <a href="{{ route('majors.create') }}" class="btn btn-sm btn-primary">Create</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="50" class="text-center">No</th>
                                <th>Name</th>
                                <th width="200" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($majors as $i => $major)
                            <tr class="align-middle">
                                <td class="text-center">{{ ++$i }}</td>
                                <!-- cara copas  1 line cepet = klik line yg dituju (dimana aja asal di line tujuan) ctrl+c terus ctrl + v -->
                                <!-- cara hapus  1 line cepet = klik line yg dituju (dimana aja asal di line tujuan) ctrl+x -->
                                <td>{{ $major->name }}</td>
                                <td class="text-center">
                                    <form method="post" action="{{ route('majors.destroy', $major->id) }}" onsubmit="return confirm('Are you sure want to delete?');">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('majors.show', $major->id) }}" class="btn btn-sm btn-info">Show</a>
                                        <a href="{{ route('majors.edit', $major->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection