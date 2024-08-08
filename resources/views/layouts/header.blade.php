<!-- resources/views/layouts/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" href="{{ route('teachers.index') }}">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}" href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('enrollments*') ? 'active' : '' }}" href="{{ route('enrollments.index') }}">Enrollments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('payments*') ? 'active' : '' }}" href="{{ route('payments.index') }}">Payments</a>
            </li>
        </ul>
    </div>
</nav>
