@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Majors</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Majors</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50">No</th>
                                    <th>Name</th>
                                    <th class="text-center" width="300">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($majors as $i => $major)
                                <tr class="align-middle">
                                    <td class="text-center">{{ ++$i }}</td>
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection