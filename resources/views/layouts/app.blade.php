<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Tiger Shipping Agencies, Inc.</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/homestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/headerstyle.css') }}">
</head>
<body>

    {{-- Include Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer (optional) --}}
    <!--
    <footer>
        <p>&copy; 2026 My Company. All Rights Reserved.</p>
    </footer>
    -->

    {{-- JS for Header Scroll Effect --}}
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.site-header');
            if(window.scrollY > 50) { // adjust scroll threshold
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
