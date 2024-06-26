<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/backend.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/remixicon/fonts/remixicon.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('WebModule::partials.sidebar')
        @include('WebModule::partials.navbar')
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @yield('content')

    </div>
    <!-- Wrapper End-->

    <!-- Modal list start -->
    @include('WebModule::partials.modal')
    @include('WebModule::partials.footer')
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('/assets/js/backend-bundle.min.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('/assets/js/table-treeview.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/assets/js/customizer.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('/assets/js/chart-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('/assets/js/slider.js') }}"></script>

    <!-- app JavaScript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>

    <script src="{{ asset('/assets/vendor/moment.min.js') }}"></script>
</body>

</html>
