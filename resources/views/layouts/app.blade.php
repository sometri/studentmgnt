<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <!-- nav -->
                @include('layouts.header')

                <!-- Sidebar -->
                <!-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light">
                    <div class="position-sticky">
                        <h4 class="text-center">Admin Panel</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="{{ route('students.index') }}">
                                    Students
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" href="{{ route('teachers.index') }}">
                                    Teachers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('enrollments*') ? 'active' : '' }}" href="{{ route('enrollments.index') }}">
                                    Enrollments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}" href="{{ route('courses.index') }}">
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('payments*') ? 'active' : '' }}" href="{{ route('payments.index') }}">
                                    Payments
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav> -->

                <!-- Main Content -->
                <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                    @yield('content')
                </main> -->

                <!-- footer -->
                @include('layouts.footer')
            </div>
        </div>
    </div>
</body>
</html>
