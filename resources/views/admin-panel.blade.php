<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin.css')}}">
    <title>Admin Dashboard | PHINMAKatanungan</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-6 fw-bold border-bottom">
                <img src="{{ url('phinma-logo.png') }}" style="width: 30px;"><a class="navbar-brand" href="#"><span style="font-weight: 500; font-family: 'Oswald', sans-serif; color: #000;">PHINMA</span><span class="katanungan" style="font-weight: 200;">Katanungan</span></a>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Announcements</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">Logout</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-dark">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Ranier Tan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Active</p>
                            </div>
                            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Posts</p>
                            </div>
                            <i class="fas fa-pen fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">0</h3>
                                <p class="fs-5">Requests</p>
                            </div>
                            <i class="fas fa-inbox fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%0</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <section id="table-box" class="m-4 table-responsive-sm">
                    <table class="table text-center table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Department</th>
                                <th scope="col">Year</th>
                                <th scope="col">Email</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <img src="{{ url('user.png') }}" style="width: 30px;">
                                    </div>
                                </th>
                                <td>User</td>
                                <td>User</td>
                                <td>Student</td>
                                <td>BSIT</td>
                                <td>First</td>
                                <td>user@example.com</td>
                                <td>69420</td>
                                <td>
                                    <a href=""><img src="{{ url('editing.png') }}" style="width: 17px;"></a>
                                    <a href=""><img src="{{ url('delete.png') }}" style="width: 17px; margin-left: 20px;"></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <img src="{{ url('user.png') }}" style="width: 30px;">
                                    </div>
                                </th>
                                <td>User</td>
                                <td>User</td>
                                <td>Student</td>
                                <td>BSIT</td>
                                <td>First</td>
                                <td>user@example.com</td>
                                <td>69420</td>
                                <td>
                                    <a href=""><img src="{{ url('editing.png') }}" style="width: 17px;"></a>
                                    <a href=""><img src="{{ url('delete.png') }}" style="width: 17px; margin-left: 20px;"></a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <img src="{{ url('user.png') }}" style="width: 30px;">
                                    </div>
                                </th>
                                <td>User</td>
                                <td>User</td>
                                <td>Student</td>
                                <td>BSIT</td>
                                <td>First</td>
                                <td>user@example.com</td>
                                <td>69420</td>
                                <td>
                                    <a href=""><img src="{{ url('editing.png') }}" style="width: 17px;"></a>
                                    <a href=""><img src="{{ url('delete.png') }}" style="width: 17px; margin-left: 20px;"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>

</body>

</html>