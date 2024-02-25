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

    <title>Teacher List</title>

</head>

<body>

    <div class="dashboard-pg text-grey-blue">
        <nav class="navigation-bar d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="navigation-bar-left col-6 d-flex align-items-center">
                        <button type="button" class="navbar-open-btn text-grey-blue me-3">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="navbar-logo">
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

                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-flag"></i>
                                    </span>
                                    <a class="text-decoration-none" href="/reports">
                                        <span class="navbar-sb-text fs-14 fw-5 text-capitalize">reports</span>
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
                <div class="row py-2 mt-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="dashboard-title-text">
                            <h2 style="color: #D9BD2D; font-weight: 600;">Teachers</h2>
                            <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <section id="table-box" class="m-4 table-responsive-sm">
        <table class="table text-center table-striped">
            <thead class="custom-thead">
                <tr>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">School</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Following</th>
                    <th scope="col">Followers</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $item)
                <tr>
                    <td class="align-middle">{{ $item->teacher_id }}</td>
                    <td class="align-middle">{{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }}</td>
                    <td class="align-middle">{{ $item->email }}</td>
                    <td class="align-middle">{{ $item->department_id }}</td>
                    <td class="align-middle">{{ $item->school_id }}</td>
                    <td class="align-middle">{{ $item->post_count }}</td>
                    <td class="align-middle">{{ $item->following_count }}</td>
                    <td class="align-middle">{{ $item->followers_count }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('teachers/'.$item->teacher_id.'/edit') }}" class="btn alert-success btn-sm me-2">
                                <i class="fa fa-pencil action-icon"></i>
                            </a>
                            <a href="{{ url('teachers/'.$item->teacher_id.'/delete') }}" class="btn alert-danger btn-sm"  data-bs-target="#staticBackdrop" data-bs-toggle="modal">
                                <i class="fa fa-ban action-icon"></i>
                            </a>
                        </div>
                    </td>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-style">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Do you want ban this account?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-proceed" data-teacher-id="{{ $item -> teacher_id }}" onclick="confirmDeletion(this)">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $teachers->links() }}
        </div>
    </section>

    <script>
            function confirmDeletion(button) {
                var studentId = button.getAttribute('data-teacher-id');
                window.location.href = "{{ url('teachers') }}/" + studentId + "/delete";
            }
        </script>



        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ ('js/admin.js') }}"></script>


</body>


</html>