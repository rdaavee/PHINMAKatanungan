<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ ('css/admin.css')}}">
    <script type="text/javascript" src="{{ ('js/admin.js') }}"></script>

    <title>Student List</title>

</head>

<body>

    <div class="dashboard-pg">
        <nav class="navigation-bar d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="navigation-bar-left col-6 d-flex align-items-center">
                        <button type="button" class="navbar-open-btn text-grey-blue me-3">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="navbar-logo mb-2">
                            <img src="{{ url('phinma-logo.png') }}" style="width: 30px;">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="navigation-overlay position-fixed"></div>

        <div class="navigation-sidebar bg-light-grey">
            <div class="navbar-sb-head d-flex justify-content-between align-items-center px-4">
                <a href="/admin-panel">
                    <img src="{{ url('phinma-logo.png') }}" style="width: 30px;">
                    <a class="navbar-brand" href="/admin-panel">
                        <span style="font-weight: 500; font-size: 13px; color: #000;">
                            PHINMA
                        </span>
                        <span class="katanungan" style="font-weight: 200; font-size: 13px;">
                            Katanungan
                        </span>
                    </a>
                </a>
                <button class="navbar-close-btn text-grey-blue">
                    <i class='fas fa-arrow-left'></i>
                </button>
            </div>

            <div class="navbar-sb-list p-4">
                <div class="navbar-sb-item mb-5">
                    <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">users management</h5>
                    <ul class="navbar-sb-links p-0 list-unstyled">

                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <a class="text-decoration-none" href="{{ url('/view-teachers') }}">
                                        <span class="navbar-sb-text fs-14 fw-5 text-capitalize">view teachers</span>
                                    </a>
                                </div>
                            </a>
                        </li>
                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <a class="text-decoration-none" href="{{ url('/view-students') }}">
                                        <span class="navbar-sb-text fs-14 fw-5 text-capitalize">view students</span>
                                    </a>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="navbar-sb-item mb-5">
                    <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">admin controls</h5>
                    <ul class="navbar-sb-links p-0 list-unstyled">

                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-bullhorn"></i>
                                    </span>
                                    <a class="text-decoration-none" href="/announcement">
                                        <span class="navbar-sb-text fs-14 fw-5 text-capitalize">announcements</span>
                                    </a>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-sb-item mb-5">
                    <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">others</h5>
                    <ul class="navbar-sb-links p-0 list-unstyled">
                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-sign-out"></i>
                                    </span>
                                    <span class="navbar-sb-text fs-14 fw-5 text-capitalize">logout</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT STARTS HERE -->

        <div class="dashboard-main">
            <div class="container">
                <div class="row py-2 mt-2">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="dashboard-title-text">
                            <h2 style="color: #D9BD2D; font-weight: 600;">Students</h2>
                            <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="table-box" class="m-5 table-responsive-sm">
                {{-- <div id="status-alert-container">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status')}} </div>
                    @endif
                </div> --}}
            <table class="table text-center table-striped">
                <thead class="custom-thead">
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Course</th>
                        <th scope="col">Department</th>
                        <th scope="col">School</th>
                        <th scope="col">Posts</th>
                        <th scope="col">Following</th>
                        <th scope="col">Followers</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($students as $item)
                        <tr>
                            <td class="align-middle">{{ $item->student_id }}</td>
                            <td class="align-middle">{{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}</td>
                            <td class="align-middle">{{ $item->gender }}</td>
                            <td class="align-middle">{{ $item->email }}</td>
                            <td class="align-middle">{{ $item->year_level }}</td>
                            <td class="align-middle">{{ $item->course_id }}</td>
                            <td class="align-middle">{{ $item->department_id }}</td>
                            <td class="align-middle">{{ $item->school_id }}</td>
                            <td class="align-middle">{{ $item->post_count }}</td>
                            <td class="align-middle">{{ $item->following_count }}</td>
                            <td class="align-middle">{{ $item->followers_count }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ url('students/'.$item->student_id.'/edit') }}" class="btn alert-success btn-sm me-2" data-bs-target="#editModal{{ $item -> student_id }}" data-bs-toggle="modal">
                                        <i class="fa fa-pencil action-icon"></i>
                                    </a>
                                    <a href="{{ url('students/'.$item->student_id.'/delete') }}" class="btn alert-danger btn-sm"  data-bs-target="#deleteModal{{ $item -> student_id }}" data-bs-toggle="modal">
                                        <i class="fa fa-ban action-icon"></i>
                                    </a>
                                </div>
                            </td>
                            <div class="modal fade" id="deleteModal{{ $item->student_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModal{{ $item->student_id }}" aria-hidden="true">
                                <div class="modal-dialog modal-style">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Do you want ban this account?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-proceed" data-student-id="{{ $item -> student_id }}" onclick="confirmDeletion(this)">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <div class="modal fade" id="editModal{{ $item->student_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModal{{ $item->student_id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Your edit form goes here -->
                                        <div class="row g-3">
                                            <form>
                                                <div class="col-md-4 mb-2">
                                                    <label for="" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <label for="" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <label for="" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-10 mb-2">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-2 mb-2 "> 
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <select name="gender" id="gender" class="form-select">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="" class="form-label">Year Level</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="" class="form-label">Course</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="" class="form-label">Department</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="" class="form-label">School</label>
                                                    <input type="text" class="form-control" id="" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-proceed" data-student-id="{{ $item -> student_id}}" onclick="submitEditForm()">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
            </table>   
            <div class="d-flex justify-content-end">
                {{ $students->links() }}
            </div>
        </section>

        <script>
            function confirmDeletion(button) {
                var studentId = button.getAttribute('data-student-id');
                window.location.href = "{{ url('students') }}/" + studentId + "/delete";
            }

            function submitEditForm(button) {
                var studentId = button.getAttribute('data-student-id');
                window.location.href = "{{ url('students') }}/" + studentId + "/edit";
            }

        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ ('js/admin.js') }}"></script>

        {{-- <script>
            $(document).ready(function () {
                var statusAlertContainer = $('#status-alert-container');
    
                if (statusAlertContainer.length) {
                    setTimeout(function () {
                        statusAlertContainer.fadeOut(500, function () {
                        });
                    }, 3500);
                }
            });
        </script> --}}


</body>


</html>