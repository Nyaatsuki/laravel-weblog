<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmer's Syphon</title>
    <link rel="stylesheet" href="/stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <x-flash />
    <x-header />
    {{ $slot }}
    <x-article-creator />
</body>

</html>