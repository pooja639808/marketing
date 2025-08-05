<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    
    <!-- Header -->
    @include('partials.header') <!-- Optional -->

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer') <!-- Optional -->

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
