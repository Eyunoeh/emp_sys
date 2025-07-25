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

@else
    <a class="btn btn-error" href="/login">Login</a>
    <a class="btn btn-error" href="/register">Regisger</a>

@endauth

</body>
</html>
