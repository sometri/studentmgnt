<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - My Application</title>
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">My Application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('enrollments.index') }}">Enrollments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('payments.index') }}">Payments</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to My Application!</h1>
            <p class="lead">This is a simple application to manage students, teachers, courses, enrollments, and payments.</p>
            <hr class="my-4">
            <p>Use the navigation bar to explore the different sections of the application.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">View Students</a>
            <a class="btn btn-primary btn-lg" href="{{ route('teachers.index') }}" role="button">View Teachers</a>
            <a class="btn btn-primary btn-lg" href="{{ route('courses.index') }}" role="button">View Courses</a>
            <a class="btn btn-primary btn-lg" href="{{ route('enrollments.index') }}" role="button">View Enrollments</a>
            <a class="btn btn-primary btn-lg" href="{{ route('payments.index') }}" role="button">View Payments</a>
        </div>
    </main>

    <footer class="bg-light py-4 mt-auto">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        </div>
    </footer>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
