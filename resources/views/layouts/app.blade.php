<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Landing Page</title>

    <link rel="apple-touch-icon" href="">
    <link rel="shorcut-icon" type="image/x-icon" href="">

    @stack('before.style')

    {{-- style --}}
    @stack('after.style')

    {{-- @include('includes.style') --}}
</head>
<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

</body>
</html>
