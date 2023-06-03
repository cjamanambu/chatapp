<head>
    <meta charset="utf-8"/>
    <title>@yield('title') | Chat by CJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description"
          content="A simple chat application with basics of authentication, user management and bidirectional communication using websockets"/>
    <meta name="keywords" content="chat, chat app, chat application, cj amanambu, typescript, edge, web sockets"/>
    <meta name="author" content="CJ Amanambu">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.cjamanambu.com/">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicons/logo.png')}}" id="tabIcon">

    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('css/app.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
    @yield('extra-styles')
</head>
