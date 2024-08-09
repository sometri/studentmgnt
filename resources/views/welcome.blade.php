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
        @include('layouts.header')
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

    <footer>
        @include('layouts.footer')
    </footer>
    
    <!-- Include Bootstrap JS and dependencies -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
