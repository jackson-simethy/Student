@extends('layouts.master')

@section('title', 'All Students')


@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Students</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Students</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Student Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Represent Teacher</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @if ($students->count()>0)



                            @foreach($students as $key => $student)


                            <tr>
                                <td>{{ $student->student_name }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->represent_teacher }}</td>
                                <td>
                                    <a href="{{ route('student.edit',[$student->id]) }}" class="btn btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger" title="Delete" onclick="event.preventDefault();document.getElementById('delete-form{{ $student->id }}').submit();"><i class="fas fa-trash"></i></a>

                                    <form action="{{ route('student.delete',[$student->id]) }}" id="delete-form{{ $student->id }}" method="post">
                                        {{method_field('DELETE')}}
                                        @csrf</form>

                                </td>

                            </tr>

                            @endforeach
                            @else
                            <tr>
                                <td>No Data Found !</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>



</div>
@endsection
