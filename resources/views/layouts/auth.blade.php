<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-login">
<div id="app" v-cloak>
    @include('vendor.toast.messages-jquery')
    @if(Auth::guest())
        <topo classe="true" titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}" white="true">
            <li><a style="color: white" href="{{ route('login') }}">Login</a></li>
            <li><a style="color: white" href="{{ route('register') }}">Register</a></li>
        </topo>
    @else
        <topo classe="true" titulo="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}">
            <li><a style="color: white" href="{{ route('admin') }}">Admin</a></li>
        </topo>
    @endif
    @yield('content')

    <footer class="footer text-center">
        &#9400; Todos os direitos reservados. {{date('Y')}}
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>