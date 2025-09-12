<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CourseCraft')</title>

    <!-- site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uploader.css') }}">

    <!-- Bootstrap 3 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Summernote CSS (compatible with Bootstrap 3) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

    @stack('styles')
</head>
<body>
    @include('layouts.header')

    <div class="container main-content" style="margin-top:20px;">
        @yield('content')
    </div>

    <!-- jQuery (must be before Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 3 JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>

    <!-- your local scripts (after plugins) -->
    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/editor.js') }}"></script>
    <script src="{{ asset('assets/js/uploader.js') }}"></script>
    <script src="{{ asset('assets/js/module.js') }}"></script>
    <script src="{{ asset('assets/js/category.js') }}"></script>

    @stack('scripts')
</body>
</html>
