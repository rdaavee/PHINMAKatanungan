<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

        @if (session('status'))
            <div class="alert alert-success">{{ session('status')}} </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Edit Announcement
                    <a href="{{ url('announcement')}}" class="btn btn-primary float-end"> Back </a>
                </h4>
                
                <div class="card-body">
                    <form action = "{{ url('announcements/'.$announcement->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label> Title </label>
                            <input type="text" name="title" value="{{ $announcement->title }}" />
                            {{-- @error('name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>
                        <div class="mb-3">
                            <label> Content </label>
                            <textarea id="content" name="content" rows="4" cols="50">{{ $announcement->content }}</textarea>
                            {{-- @error('name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>
                        <div class="mb-3">
                            <label> Status </label>
                            <select name="status">
                                <option value="Active" {{ $announcement->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $announcement->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            {{-- @error('name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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