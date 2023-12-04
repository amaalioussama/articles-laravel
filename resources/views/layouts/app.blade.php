<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Your Laravel App</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <!-- Add more links as needed -->
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
