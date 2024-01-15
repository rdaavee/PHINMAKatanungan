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

    <div class="input-box ms-auto me-auto mt-5">
        <h1>Password Change request</h1>
        <p>A request has been received to change the password for your account.</p>

        <a href="{{route("reset_password",$token)}}">Reset Your Password</a>
    </div>
</body>

</html>