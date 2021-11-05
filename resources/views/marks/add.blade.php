@extends('layouts.master')

@section('title', 'Add Marks')


@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Student Marks</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Student Marks</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Student Marks</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('marks.save') }}">@csrf
                        <div class="form-group col-md-6">
                            <label for="sname">Student Name</label>
                            <select name="sname" class="form-control">
                                <option value="">Select Student</option>
                                @foreach(App\Models\Student::all() as $key=> $student)
                                <option value=" {{$student->id}}">{{$student->student_name}}</option>
                                @endforeach

                            </select> @error('sname')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="term">Term</label>
                            <select class="form-control @error('term') is-invalid @enderror" name="term">
                                <option value="">Select Term</option>
                                <option value="One" {{old('term')=="One"?'selected':''}}>One</option>
                                <option value="Two" {{old('term')=="Two"?'selected':''}}>Two</option>

                            </select>
                            @error('term')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="maths">Maths</label>
                            <input type="text" class="form-control @error('maths') is-invalid @enderror" name="maths">
                            @error('maths')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="maths">Science</label>
                            <input type="text" class="form-control @error('science') is-invalid @enderror" name="science">
                            @error('science')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="maths">History</label>
                            <input type="text" class="form-control @error('history') is-invalid @enderror" name="history">
                            @error('history')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>



                    </form>
                </div>
            </div>


        </div>


    </div>


</div>
@endsection
