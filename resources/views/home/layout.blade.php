<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Manager</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css','resources/js/app.js'])
</head>
<body style="height: 100%; width:100%; background-color: #F7ECDE">
    <header class="d-flex justify-content-center pt-5 pb-5" style="width: 100%">
        <nav>
            <h1 class="fs-2 text-uppercase fw-bold" style="color: #E9C597">Task Manager</h1>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>