<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@auth
    <h1>Welcome</h1>
    <a class="btn btn-error" href="/logout">Logout</a>
@else
    <a class="btn btn-error" href="/login">Login</a>
    <a class="btn btn-info" href="/register">Register</a>

@endauth

</body>
</html>
