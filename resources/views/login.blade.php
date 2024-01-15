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
        <div class="position-absolute mt-1 container-fluid">
            @if($errors->any())
            <div id="error" class="col-12">
                @foreach ($errors -> all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session() -> has('error'))
            <div id="session-error" class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session() -> has('success'))
            <div id="session-success" class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <div class="container main py-5">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="text">
                        <p>MAKING LIVES BETTER THROUGH EDUCATION</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <form action="{{route('login_post')}}" method="POST" class="input-box">
                        @csrf
                        <header>PHINMA<span class="katanungan">Katanungan</span></header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="forget">
                            <a href="{{route('forget_password')}}">Forget Password</a>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Login" id="submit">
                        </div>
                        <div class="signin">
                            <span>Don't have an account? <a href="/signup">Sign up here</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--========== END OF LOGIN SECTION ==========-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="/src/components/main.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>