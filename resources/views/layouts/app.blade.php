<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


    @include('layouts.partial.css')

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>{{ config('app.name', 'Gossip') }}</title>
</head>


<body class="">

    <div class="page-wrapper">
        @include('layouts.navbar')
        <div class="main">
            <div class="main-inner">
                @yield('content')
                <!-- /.container -->
            </div><!-- /.main-inner -->
        </div><!-- /.main -->
        @include('layouts.footer')
    </div><!-- /.page-wrapper -->

    @include('layouts.partial.scripts')



</body>

</html>
