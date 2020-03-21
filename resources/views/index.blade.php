<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Testable - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ mix('vendor/testable/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="vue-testable">
        <Testable />
    </div>

    <!-- Scripts -->
    <script src="{{ mix('vendor/testable/js/app.js') }}"></script>

    @section('script')
    @show('script')
</body>
</html>
