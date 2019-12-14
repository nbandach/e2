<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
    <a href='/'><img id='logo' src='/images/rpslogo.png' alt='Rock Paper Scissors Logo'></a>
    <h1><a href='/'>{{ $app->config('app.name') }}</a></h1>
</header>

<main>
    @yield('content')
</main>

@yield('body')

</body>
</html>