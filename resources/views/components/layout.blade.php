@props([
    'title' => 'Laracasts'
])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title  }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-700 p-6 max-w-xl mx-auto text-white">
    {{ $slot }}
</body>
