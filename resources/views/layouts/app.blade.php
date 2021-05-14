<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')

</head>
<body class="loading">

    <div class="page-wrapper">
        @section('navbar')
            <!-- .navbar -->
            @includeIf('layouts.partials.navbar')
            <!-- / .navbar -->
        @show

        @section('sidebar')
            <!-- NAV:SIDEBAR-->
            @includeIf('layouts.partials.sidebar')
            <!-- /NAV:SIDEBAR-->
        @show

        <!-- PAGE:CONTENT  -->
        <main id="content" class="h-100">

            <!-- .content -->
            @yield('content')
            <!-- / .content -->

            @section('footer')
                <!-- .footer -->
                @includeIf('layouts.partials.footer')
                <!-- / .footer -->
            @show
        </main>
    </div>

    <script>
        console.log('CONSOLE:LAYOUT');
    </script>
    @stack('scripts')
</body>
</html>
