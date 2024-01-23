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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                List of Student
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('students.create') }}" class="btn btn-sm btn-primary">Create</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Birth</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Religion</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Major</th>
                                    <th class="text-center">Extracurricular</th>
                                    <th class="text-center">Action</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($students as $i => $student)
                                <tr class="align-middle">
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->birth }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->religion }}</td>
                                    <td>{{ $student->status }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->major->name }}</td>
                                    <td>{{ $student->extracurricular->name }}</td>
                                    <td class="text-center">
                                        <form method="post" action="{{ route('students.destroy', $student->id) }}" onsubmit="return confirm('Are you sure want to delete?');">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">Show</a>
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
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