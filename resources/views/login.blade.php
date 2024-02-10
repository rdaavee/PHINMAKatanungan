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
                    <div class="text">
                        <p>MAKING LIVES BETTER THROUGH EDUCATION</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    {{-- <form action="{{route('login_post')}}" method="POST" class="input-box"> --}}
                    <form action="{{route('admin.login_handler')}}" method="POST" class="input-box"> 
                        @csrf
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <header>PHINMA<span class="katanungan">Katanungan</span></header>
                        <div class="input-field">
                            <input type="text" class="input" id="login_id" name="login_id" autocomplete="off" value="{{ old('login_id') }}">
                            <label for="login_id">Email/Username</label>
                        </div>
                        @error('login_id')
                            <div class="d-block text-danger" style="font-size: 15px; margin-top: -25px; margin-bottom: 15px;">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password">
                            <label for="password">Password</label>
                        </div>
                        @error('password')
                            <div class="d-block text-danger" style="font-size: 15px; margin-top: -25px; margin-bottom: 15px;">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="remember">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                          </div>
                        <div class="forget">
                            {{-- <a href="{{route('forget_password')}}">Forget Password</a> --}}
                            <a href="#">Forget Password</a>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Login" id="submit">
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