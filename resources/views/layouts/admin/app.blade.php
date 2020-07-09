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
    <div class="page-wrapper" >
        @include('layouts.admin.header')

        <div class="main">
            <div class="outer-admin">
                <div class="wrapper-admin">
                    @include('layouts.admin.sidebar')
                    <div class="content-admin">
                        <div class="content-admin-wrapper">
                            <div class="content-admin-main">
                                <div class="content-admin-main-inner">
                                    @yield('content')
                                </div><!-- /.content-admin-main-inner -->
                            </div><!-- /.content-admin-main -->

                            <div class="content-admin-footer">
                                <div class="container-fluid">
                                    <div class="content-admin-footer-inner">
                                        &copy; 2015 All rights reserved. Created by <a href="#">Aviators</a>.
                                    </div><!-- /.content-admin-footer-inner -->
                                </div><!-- /.container-fluid -->
                            </div><!-- /.content-admin-footer  -->
                        </div><!-- /.content-admin-wrapper -->
                    </div><!-- /.content-admin -->
                </div><!-- /.wrapper-admin -->
            </div><!-- /.outer-admin -->
        </div><!-- /.main -->
    </div><!-- /.page-wrapper -->
    @include('layouts.partial.scripts')
</body>

</html>
