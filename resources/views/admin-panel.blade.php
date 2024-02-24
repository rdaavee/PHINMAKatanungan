<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>

    <title>Admin Dashboard | PHINMAKatanungan</title>
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
                                    <a class="navbar-sb-text fs-14 fw-5 text-capitalize text-decoration-none" href="{{ route('admin.logout_handler') }}" onclick="event.preventDefault();document.getElementById('adminLogoutForm').submit();">
                                        logout
                                    </a>

                                    <form action="{{ route('admin.logout_handler') }}" id="adminLogoutForm" method="POST">@csrf</form>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="dashboard-main">
            <div class="container">
                <div class="row py-2 mt-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="dashboard-title-text">
                            <h2 style="color: #D9BD2D; font-weight: 600;">Dashboard</h2>
                            <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6 py-1">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Teacher</li>
                                            <li><span class="circle-green"></span>Student</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6 mb-5">
                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                <div class="col-6 py-1">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Male</li>
                                            <li><span class="circle-green"></span>Female</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <ul>
                    @isset($userCountsByRole)
                        @foreach ($userCountsByRole as $student_id => $count)
                            <li>{{ $student_id }} : {{ $count }}</li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>

        <div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Active Users</h4>
                    <p>Total Users: @isset($userCounts){{ $userCounts }}@endisset</p>
                </div>
            </div>
        </div>

        


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>


</body>


</html>