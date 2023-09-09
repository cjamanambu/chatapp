<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <meta name="description"
          content="A simple chat application with basics of authentication, user management and bidirectional communication using websockets"/>
    <meta name="keywords" content="chat, chat app, chat application, cj amanambu, typescript, edge, web sockets"/>
    <meta name="author" content="CJ Amanambu">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.cjamanambu.com/">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicons/logo.png')}}" id="tabIcon">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
