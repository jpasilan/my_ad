<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>my-ad.ca</title>
    <link rel="icon" href="" />
    {{ HTML::style('assets/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/css/custom.css') }}

    @yield('more-header-scripts')
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')

    {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
    @yield('more-footer-scripts')
</body>
</html>
