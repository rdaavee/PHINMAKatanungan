<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin.css')}}">
    <script type="text/javascript" src="{{ URL::to('js/admin.js') }}"></script>

    <title>Edit Student</title>

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status')}} </div>
                @endif


                <div class="card">
                    <div class="card-header">
                            <a href="{{ url('view-students')}}" class="btn btn-primary float-end"> Back </a>
                        
                        <div class="card-body">
                            <form action = "{{ url('students/'.$student->student_id.'/edit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                {{-- <div class="mb-3">
                                    <label> Student ID </label> 
                                    <input type="text" name="first_name" value="{{ $student->first_name }}" /> 
                                    {{-- @error('age') <span class="text-danger">{{ $message }}</span> @enderror --}}
                                {{-- </div> --}} 
                                <div class="mb-3">
                                    <label> First Name </label>
                                    <input type="text" name="first_name" value="{{ $student->first_name }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Middle Name </label>
                                    <input type="text" name="middle_name" value="{{ $student->middle_name }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Last Name </label>
                                    <input type="text" name="last_name" value="{{ $student->last_name }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Gender </label>
                                    <select name="gender">
                                        <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Email </label>
                                    <input type="text" name="email" value="{{ $student->email }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Year Level </label>
                                    <input type="text" name="year_level" value="{{ $student->year_level }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Course </label>
                                    <input type="text" name="course_id" value="{{ $student->course_id }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Department </label>
                                    <input type="text" name="department_id" value="{{ $student->department_id }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> School </label>
                                    <input type="text" name="school_id" value="{{ $student->school_id }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::to('js/admin.js') }}"></script>


</body>


</html>