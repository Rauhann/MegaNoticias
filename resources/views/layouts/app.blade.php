<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-utilities.rtl.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css/sweetalert2.css">

    <style>
        .shadow {
            box-shadow: 0 0 1em #9C9C9C;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>

    @yield('css')

</head>

<body style="background-color: #BDB76B">

    @include('layouts.menu')

    @yield('content')

    @include('layouts.footer')

    <input type="hidden" id="url" value="{{ config('app.url') }}">

    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/axios.min.js"></script>
    <script src="../../js/sweetalert2.all.min.js"></script>
    <script src="../../js/register.js"></script>

    @yield('js')

</body>

</html>
