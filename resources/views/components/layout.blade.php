@props([
    'title' => 'Laracasts'
])
    
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title  }}</title>
    <style>
        nav > a {
            color: blue;
        }

        .max-w-400 {
            max-width: 400px;
            margin-inline: auto;
        }

        .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{  url('about') }}">About Us</a>
        <a href="{{ url('contact') }}">Contact Us</a>
    </nav>

    {{ $slot }}
</body>
