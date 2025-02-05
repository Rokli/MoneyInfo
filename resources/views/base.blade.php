<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/base.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/header.css')
    <title>Money Info</title>
</head>
<body>
    @include('header')

    <main>
        @yield("content")
    </main>

    @include('footer')
</body>
</html>