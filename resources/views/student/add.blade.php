@extends('layouts.master')

@section('title', 'Add Student')


@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Student</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Student</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Student</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('student.save') }}">@csrf
                        <div class="form-group col-md-6">
                            <label for="sname">Student Name</label>
                            <input type="text" class="form-control @error('sname') is-invalid @enderror" id="sname" name="sname" placeholder="Student Name" value="{{ old('sname') }}">
                            @error('sname')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age">Age</label>
                            <input type="text" maxlength="2" name="age" class="form-control @error('age') is-invalid @enderror" id="age" value="{{ old('age') }}" placeholder="Student Age">
                            @error('age')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male" {{old('gender')=="Male"?'selected':''}}>Male</option>
                                <option value="Female" {{old('gender')=="Female"?'selected':''}}>Female</option>
                                <option value="Other" {{old('other')=="Other"?'selected':''}}>Other</option>
                            </select>
                            @error('gender')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gender">Reporting Teacher</label>
                            <select class="form-control @error('teacher') is-invalid @enderror" name="teacher">
                                <option value="">Select Teacher</option>
                                <option value="Katie" {{old('teacher')=="Katie"?'selected':''}}>Katie</option>
                                <option value="Max" {{old('teacher')=="Max"?'selected':''}}>Max</option>
                            </select>
                            @error('teacher')
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
