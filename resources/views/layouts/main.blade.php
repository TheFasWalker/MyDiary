<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css','resources/scss/styles.scss', 'resources/js/app.js'])
</head>

<body>
    <main>
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </main>
</body>

</html>