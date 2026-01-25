<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    {{ $slot }}

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{  url('about') }}">About Us</a>
        <a href="{{ url('contact') }}">Contact Us</a>
    </nav>
</body>
