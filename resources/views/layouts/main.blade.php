<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS or specific styles -->
    @yield('styles')
</head>
<body id="app">
<!-- Content Section -->
<div class="container">
    @yield('content')
</div>

<!-- Bootstrap JS and any additional JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
@vite('resources/js/app.js')

@yield('scripts')
</body>
</html>
