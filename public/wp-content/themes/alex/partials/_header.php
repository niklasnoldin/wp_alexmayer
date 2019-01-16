<!DOCTYPE html>
<!--
    TODO:
    * adapt theme colors
    * create new images/icon-touch, eg. with https://realfavicongenerator.net/
-->
<html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Alex Mayer ist ein mehrfach ausgezeichneter Salzburger Webdesigner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="referrer" content="same-origin">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Web Starter Kit">
        <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Alex Mayer">
        <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#2F3BA2">

        <!-- Color the status bar on mobile devices -->
        <meta name="theme-color" content="#2F3BA2">

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
            <link rel="canonical" href="http://www.example.com/">
        -->
        <link href="https://fonts.googleapis.com/css?family=Slabo+13px" rel="stylesheet">
    <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <h1><a href='/'>Alex Mayer</a></h1>
            <nav>
                <input type="checkbox" id="button" />
                <label for="button" onclick></label>

                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <ul>
                    <li class='current-menu-item'><a href='#'>Start</a></li>
                    <li><a href='#'>Leistungen</a></li>
                    <li><a href='#'>Blog</a></li>
                    <li><a href='#'>Über mich</a></li>
                    <li><a href='#'>Kontakt</a></li>
                </ul>
                
            </nav>
            <section id='hero'>
                <h2>Glänzende Ideas für leuchtende Augen</h2>
                <a href='#'>Angebot einholen</a>
            </section>
        </header>