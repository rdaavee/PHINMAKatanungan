<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Dashboard</title>
</head>


<body>

    <!--============= NAVBAR SECTION =============-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body rounded">
            <div class="container-fluid">
                <img src="{{ url('phinma-logo.png') }}" style="width: 50px;"><a class="navbar-brand ms-3" href="#"><span style="font-weight: 700; font-family: 'Oswald', sans-serif;">PHINMA</span><span class="katanungan">Katanungan</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <a href="">
                            <img src="{{ url('user.png') }}" style="width: 30px;">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="table-box" class="m-4 table-responsive-sm">
        <table class="table text-center table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
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

</body>

</html>