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
    <form action="{{route('reset_password_post')}}" method="POST" class="input-box ms-auto me-auto mt-5">
        @csrf
        <input type="text" name="token" hidden value="{{$token}}">
        <header>Enter a new password</header>
        <div class="input-field">
            <input type="text" class="input" name="email" required autocomplete="off">
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <input type="password" class="input" name="password" required autocomplete="off">
            <label for="email">Enter new password</label>
        </div>
        <div class="input-field">
            <input type="password" class="input" name="confirm_password" required autocomplete="off">
            <label for="email">Confirm password</label>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Submit" id="submit">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="/src/components/main.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>