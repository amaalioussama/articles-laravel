<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .container {
            margin: 20px;
        }
    </style>
</head>
<body>
    <nav>
    <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contactUs') }}">Contact Us</a>
        <a href="{{ route('login') }}">Login</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
