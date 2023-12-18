<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your Laravel App</title>
</head>
<body>
    <nav>
        <ul>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contactUs') }}">Contact Us</a>
        <a href="{{ route('login') }}">Login</a>
            <!-- Add more links as needed -->
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
