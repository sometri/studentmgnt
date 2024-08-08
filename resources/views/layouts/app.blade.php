<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Application</title>
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        @include('layouts.footer')
    </footer>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
