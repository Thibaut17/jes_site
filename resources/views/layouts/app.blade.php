<!DOCTYPE html>
<html lang="fr">

<!--
    Interface web développée par Thomas CHAREWICZ
    (thomascharewicz[at]live[dot]fr)
    pour Junior ENSSAT Services
    Octobre 2021
-->

<head>
    <!-- Content display -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>JES - Junior ENSSAT Services</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">

    <!-- Media share -->
    <meta name="description" content="Choisissez l'expertise de JES pour la réalisation de vos projets d'ingénierie en photonique, informatique et électronique !">
    <meta name="image" content="{{ asset('images/opengraph-image.png') }}>
    <meta name="theme-color" content="#E8641B">
    <meta property="og:title" content="Junior ENSSAT Services">
    <meta property="og:url" content="https://junior-enssat-services.fr">
    <meta property="og:description" content="Choisissez l'expertise de JES pour la réalisation de vos projets d'ingénierie en photonique, informatique et électronique !">
    <meta property="og:image" content="{{ asset('images/opengraph-image.png') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Junior ENSSAT Services">
    <meta name="twitter:description" content="Choisissez l'expertise de JES pour la réalisation de vos projets d'ingénierie en photonique, informatique et électronique !">
    <meta name="twitter:image" content="{{ asset('images/opengraph-image.png') }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <!-- Data prefetch -->
    <link rel="prefetch" href="https://junior-enssat-services.fr/">
    <link rel="prefetch" href="https://junior-enssat-services.fr/services">
    <link rel="prefetch" href="https://junior-enssat-services.fr/equipe">
    <link rel="prefetch" href="https://junior-enssat-services.fr/actualites">
    <link rel="prefetch" href="https://junior-enssat-services.fr/contact">
    <link rel="prefetch" href="https://junior-enssat-services.fr/sitemap">
    <link rel="prefetch" href="https://junior-enssat-services.fr/legal">
    <link rel="prefetch" href="https://junior-enssat-services.fr/confidentialite">

</head>
<body class="{{$view_name}}">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
</body>
</html>
