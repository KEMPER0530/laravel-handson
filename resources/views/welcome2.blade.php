<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="akazawa portfolioの管理サイト">
    <meta name="keywords" content="akazawa portfolio">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <div id="container">
        <header>
            <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="akazawa "></a></h1>
            <aside id="mainimg"><img src="images/mainimg.jpg" alt=""></aside>
        </header>

        <nav id="menubar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="link.html">Link</a></li>
            </ul>
        </nav>
    </div>
    <!--/container-->
</body>

</html>
