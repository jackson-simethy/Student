@extends('layouts.master')

@section('title', 'All Students Marks')


@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Students Marks</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Students Marks</li>
        </ol>
    </div>
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Students Marks</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Maths</th>
                                <th>Science</th>
                                <th>History</th>
                                <th>Term</th>
                                <th>Total Marks</th>
                                <th>Created On</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if ($marks->count()>0)
                            @foreach($marks as $key=> $mark)


                            <tr>
                                <td>{{ $mark->student->student_name }}</td>
                                <td>{{ $mark->maths }}</td>
                                <td>{{ $mark->science }}</td>
                                <td>{{ $mark->history }}</td>
                                <td>{{ $mark->term }}</td>
                                <td>{{ $mark->maths+$mark->science+$mark->history }}</td>
                                <td>{{ date('M j,Y G:i a',strtotime($mark->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('marks.edit',[$mark->id]) }}" class="btn btn-primary" title="Edit"><i class="fas fa-edit"></i></a>

                                    <a href="" class="btn btn-danger" title="Delete" onclick="event.preventDefault();document.getElementById('delete-form{{ $mark->id }}').submit();"><i class="fas fa-trash"></i></a>

                                    <form action="{{ route('marks.delete',[$mark->id]) }}" id="delete-form{{ $mark->id }}" method="post">
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
