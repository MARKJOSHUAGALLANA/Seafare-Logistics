<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        nav {
            background-color: #007bff00;
            color: linear-gradient(to right, #2ecc71, #2980b9, #01e09a);
            padding: 10px 0;
            
        }

        h1 {
            margin-left: 20px;
            color: #000000;
        }

        .nav-link {
            color: white;
        }

        .nav-link.active {
            font-weight: bold;
        }

        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <h1>Seafare Logistics</h1>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('users') ? 'active' : '' }}" href="{{ url('/users') }}">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('bookings') ? 'active' : '' }}" href="{{ url('/bookings') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('venues') ? 'active' : '' }}" href="{{ url('/venues') }}">Venue</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
