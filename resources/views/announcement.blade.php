<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="images/icon" href="{{ url('storage/images/phinma-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    {{-- multiselect --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/admin.css')}}">
    <script type="text/javascript" src="{{ secure_asset('js/admin.js') }}"></script>

    <title>Announcements</title>
</head>

<body>

    <div class="dashboard-pg text-grey-blue">
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
        </nav>

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
                                    <span class="navbar-sb-text fs-14 fw-5 text-capitalize">logout</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT STARTS HERE -->

        <div class="main-content">
            <div class="header-wrapper">
                <div class="header-title">
                    <span>View</span>
                    <p>Announcements Table</p>
                </div>
            </div>
        </div>


        
        
        
        <section id="table-box" class="m-4 table-responsive-sm">
            <form action="{{ url('/announcement') }}" method="GET">
                <div class="row align-items-end mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Filter by Department</label>
                        <select name="filterDepartments[]" class="form-select" id="filter" multiple aria-label="multiple select example">
                            @foreach($departments as $department)
                                <option value="{{ $department }}" class="w-100" {{ in_array($department, request()->filterDepartments ?? []) ? 'selected' : '' }}>{{ $department }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mt-md-0 mt-2">
                        <button type="submit" class="btn btn-proceed w-100">Filter</button>
                    </div>
                </div>
            </form>
            {{-- <div id="status-alert-container">
                @if (session('status'))
                <div class="alert alert-success">{{ session('status')}} </div>
                @endif
            </div> --}}
            <table class="table text-center table-striped">
                <thead class="custom-thead">
                <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Departments</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($announcements as $item)
                <tr>
                        <td class="align-middle">{{ $item->title }}</td>
                        <td class="align-middle">{{ $item->content }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @foreach ($item->departments as $department)
                                    <span class="m-1">{{ $department->department_id }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="align-middle">{{ $item->status }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('announcements/'.$item->id.'/edit') }}" class="btn alert-success btn-sm me-2" data-bs-target="#editModal{{ $item->id }}" data-bs-toggle="modal">
                                    <i class="fa fa-pencil action-icon"></i>
                                </a>
                            </div>
                        </td>
                </tr>
                <div class="modal fade" id="editModal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModal{{ $item->student_id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Announcement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                                    <form action="{{ url('announcements/'.$item->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group col-md-9">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}"required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label"> Status </label>
                                            <select name="status" class="form-control">
                                                <option value="Active" {{ $item->status == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="Inactive" {{ $item->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            {{-- @error('name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                                        </div>
                                        <div class="form-group custom-textarea">
                                            <label for="content" class="form-label">Enter an announcement body</label>
                                            <textarea class="form-control" id="content" name="content" rows="3" required>{{ $item->content }}</textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label for="departments" class="form-label">Select department/s</label>
                                            <select class="form-select dropdown-select" id="departments" name="departments[]" multiple aria-label="multiple select example">
                                                @foreach (App\Models\Department::all() as $department)
                                                    <option @if($item->departments->contains($department->department_id)) selected @endif>{{ $department->department_id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-proceed">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $announcements->links() }}
            </div>
        </section>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="{{ secure_asset('js/admin.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

        

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var multiSelect = new MultiSelectTag('departments', {
                    tagColor: {
                        textColor: '#327b2c',
                        borderColor: 'rgba(26, 139, 147, .9)',
                        bgColor: 'rgba(26, 139, 147, .2)',
                    }
                });
                    new MultiSelectTag('filter', {
                    placeholder: 'Search Department',
                    tagColor: {
                        textColor: '#327b2c',
                        borderColor: 'rgba(26, 139, 147, .9)',
                        bgColor: 'rgba(26, 139, 147, .2)',
                    }
                });
            });
        </script>

        <script>

        </script>


</body>


</html>