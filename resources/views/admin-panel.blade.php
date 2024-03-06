<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
    {{-- multiselect --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>

    <title>Admin Dashboard | PHINMAKatanungan</title>
</head>

<body class="bg-white">

    <div class="dashboard-pg text-grey-blue bg-white">
        <nav class="navigation-bar d-flex align-items-center">
            <div class="ms-5">
                <div class="row align-items-center">
                    <div class="navigation-bar-left col-6 d-flex align-items-center">
                        <button type="button" class="navbar-open-btn text-grey-blue me-3">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="navbar-logo">
                            <img src="{{ url('phinma-logo.png') }}" style="width: 30px;">
                        </div>
                        <a class="navbar-brand ms-3" href="/admin/admin-panel">
                            <span style="font-weight: 500; font-size: 15px; color: #000;">
                                PHINMA
                            </span>
                            <span class="katanungan" style="font-weight: 500; font-size: 15px;">
                                Katanungan
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ms-auto p-3 me-3">
                <button type="button" class="btn btn-create navbar-sb-text fs-15 fw-5 text-decoration-none btn-announcement" data-bs-toggle="modal" data-bs-target="#announcementModal">
                    <span class="icon-placeholder fa fa-plus"></span><h5 class="txt-announcement">Create Announcement</h5>
                </button>
            </div>
        </nav>
    </div>

        <div class="navigation-overlay position-fixed"></div>

        <div class="navigation-sidebar bg-light-grey">
            <div class="navbar-sb-head d-flex justify-content-between align-items-center px-4">
                <a href="/admin/admin-panel">
                    <img src="{{ url('phinma-logo.png') }}" style="width: 30px;">
                    <a class="navbar-brand" href="/admin/admin-panel">
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
                        <li class="navbar-sb-link my-3">
                            <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                                <div class="text-light-blue d-flex align-items-center">
                                    <span class="navbar-sb-icon me-3">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <a class="text-decoration-none" href="{{ url('/view-banned-users') }}">
                                        <span class="navbar-sb-text fs-14 fw-5 text-capitalize">banned users</span>
                                    </a>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="navbar-sb-item mb-5">
                    <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">admin control</h5>
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

                <div class="modal fade" id="announcementModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="announcementModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="announcementModalLabel">Create Announcement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('add_announcement')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="form-group custom-textarea">
                                        <label for="" class="form-label">Enter an announcement body</label>
                                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="departments" class="form-label">Select department/s</label>
                                        <select class="form-select" id="departments" name="departments[]" multiple aria-label="multiple select example">
                                            @foreach (App\Models\Department::all() as $department)
                                                <option>{{ $department->department_id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-proceed">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
 


            <section>
                <div class="row">
                    <div class="charts">
                        <div class="chart">
                            <canvas id="lineChart"></canvas>
                        </div>
                        <div class="chart" id="pie-chart">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </section>


            <div class="mt-3">
                <div class="row">
                    <div class="cards">
                        <div class="col-div-3">
                            <div class="box">
                                <p>{{ $registeredUsersCount }} <br/><span>Registered Users</span></p>
                                <i class="fa fa-users box-icon"></i>
                            </div>
                        </div>
                        <div class="col-div-3">
                            <div class="box">
                                <p>{{ $activeUsersCount }} <br/><span>Active Users</span></p>
                                <i class="fa fa-user-check box-icon"></i>
                            </div>
                        </div>
                        <div class="col-div-3">
                            <div class="box">
                                <p>{{ $commentsCount }} <br/><span>Comments</span></p>
                                <i class="fa fa-comments box-icon"></i>
                            </div>
                        </div>
                        <div class="col-div-3">
                            <div class="box">
                                <p>{{ $postsCount }} <br/><span>Posts</span></p>
                                <i class="fa fa-newspaper box-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            async function fetchData() {
                const response = await fetch('/chart-data');
                const data = await response.json();
                return data;
            }

            document.addEventListener('DOMContentLoaded', async function() {
                const response = await fetch('/chart-data');
                const data = await response.json();
                const studentsChartData = data.studentsChartData;
                const teachersChartData = data.teachersChartData;
                const activeChartData = data.activeChartData;
                const bannedChartData = data.bannedChartData;

                const ctx = document.getElementById('lineChart').getContext('2d');
                
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: studentsChartData.map(data => data.label),
                                labels: teachersChartData.map(data => data.label),
                                datasets: [
                                    {
                                        label: 'Students',
                                        data: studentsChartData.map(data => data.value),
                                        backgroundColor: 'rgba(26, 139, 147, .9)',
                                        borderColor: 'rgba(26, 139, 147, 1)',
                                    },
                                    {
                                        label: 'Teachers',
                                        data: teachersChartData.map(data => data.value),
                                        backgroundColor: 'rgba(217, 189, 45, .9)',
                                        borderColor: 'rgba(217, 189, 45, 1)',
                                    },

                                ]
                            },
                            options: {
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Registered Users',
                            },
                        },
                        maintainAspectRatio: false,
                        responsive: true,
                        width: 10,
                        height: 65,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                const ctx2 = document.getElementById('pieChart').getContext('2d');
                        
                        new Chart(ctx2, {
                            type: 'pie',
                            data: {
                                labels: activeChartData.map(data => data.label),
                                datasets: [
                                    {
                                        data: activeChartData.map(data => data.value),
                                        backgroundColor: [
                                        '#09921E',
                                        '#000000',
                                        '#7C0505',
                                        'rgba(251, 161, 183, 1)',
                                        'rgba(124, 147, 195, 1)',
                                        '#00A3FF',
                                        'rgba(244, 206, 20, 1)',
                                        'rgba(199, 200, 204, 1)',
                                        ],
                                        borderColor: 'rgba(255, 255, 255, .4)',
                                    },
                                ]
                            },
                            options: {
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Active Users',
                            },
                        },
                        maintainAspectRatio: true,
                        responsive: true,
                    }
                });
            });

        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

        

        <script>
            new MultiSelectTag('departments', {
                tagColor: {
                    textColor: '#327b2c',
                    borderColor: 'rgba(26, 139, 147, .9)',
                    bgColor: 'rgba(26, 139, 147, .2)',
                }
            })
        </script>

        

</body>


</html>