<!DOCTYPE html>
<html lang="en">
<script src="{{ asset('dist/js/frontend.js') }}"></script>
<link rel="stylesheet" href="{{asset('dist/css/frontend.css')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $setting->name ?? 'Example' }}</title>
    @include('Frontend.includes.top')
    @yield('head')
   
</head>

<body>
    @include('Frontend.includes.top-header')
    @include('Frontend.includes.navbar')
    <main style="min-height: 50vh;margin-top:-10px !important">
        @include('Frontend.includes.message')
        @yield('content')
    </main>
    @include('Frontend.includes.footer')
    @include('Frontend.includes.bottom')
    @yield('scripts')
</body>

</html>
