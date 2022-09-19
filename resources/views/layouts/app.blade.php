<!DOCTYPE html>
<html data-theme="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    @include('partials.header')
    @if ($message = Session::get('error'))
        <p style={{ 'color:red;' }}>{{ $message }}</p>
    @endif
    <div class="min-h-screen">
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>
