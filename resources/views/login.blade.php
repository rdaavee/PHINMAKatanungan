<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--========== START OF LOGIN SECTION ==========-->
    <div class="wrapper">
        <div class="container main py-5">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="{{ url('bg_img.jpg') }}" style="width: 300px; height: 300px; margin-left: 50px;">
                    <div class="text">
                        <p style="margin-top: 270px; line-height: 20px; margin-right: 10px;"><span class="katanungan1 fw-bolder">Welcome to PHINMA</span><span class="fw-bolder">Katanungan</span></p>
                        <p class="subtitle" style="font-size: 8px; color: #0e0e0e; font-weight: 400; margin-bottom: 30px;">Easily collaborate and interact with other users affiliated in Dagupan Campus with this forum-based community.</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    {{-- <form action="{{route('login_post')}}" method="POST" class="input-box"> --}}
                    <form action="{{route('admin.login_handler')}}" method="POST" class="input-box">
                        @csrf
                        @if (Session::get('fail'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="font-size: 10px;">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ Session::get('fail') }}
                        </div>
                        @endif

                        <header>PHINMA<span class="katanungan">Katanungan</span></header>
                        <div class="mb-3">
                            <label for="login_id" class="form-label">Email or Username</label>
                            <input type="text" class="form-control" id="login_id" name="login_id" autocomplete="off" value="{{ old('login_id') }}">
                        </div>
                        @error('login_id')

                        <div class="d-block text-danger fade show" style="font-size: 10px; margin-left: 13px; margin-top: -5px; margin-bottom: 20px;">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        @error('password')

                        <div class="d-block text-danger fade show" style="font-size: 10px; margin-left: 13px; margin-top: -5px; margin-bottom: 20px;">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="d-flex justify-content-between align-items-center rememberforget">
                            <div class="remember">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="forget">
                                {{-- <a href="{{route('forget_password')}}">Forget Password</a> --}}
                                <a href="#" style="font-size: 10px;">Forget Password</a>
                            </div>
                        </div>

                        <div class="input-field">
                            <input type="submit" class="submit" value="Log In" id="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--========== END OF LOGIN SECTION ==========-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="/src/components/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>