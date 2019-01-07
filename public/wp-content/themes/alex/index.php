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
            <h1><a href='#'>Alex Mayer</a></h1>
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
                <h2>Glänzende Ideen für leuchtende Augen</h2>
                <a href='#'>Angebot einholen</a>
            </section>
        </header>

        <main>
            <section id='leistungen'>
                <h2>Leistungen</h2>
                <article>
                    <h3>Design</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/design.svg' alt='Malutensilien'>
                </article>
                <article>
                    <h3>Strategie</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/strategy.svg' alt='Zielscheibe'>
                </article>
                <article>
                    <h3>Consulting</h3>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/consulting.svg' alt='Consulting'>
                </article>
            </section>

            <section id='news'>
                <h2>News</h2>
                <article>
                    <h3><a href='#'>365 Postkarten</a> – </h3> 
                    <p>Eine Liebeserklärung für jeden Tag! <a href='#'>[mehr erfahren]</a></p>
                </article>
                <article>
                    <h3><a href='#'>Award-Nominierung</a> – </h3>
                    <p>Tolle News: Ich bin bei der Endauswahl 2018! <a href='#'>[mehr erfahren]</a></p>
                </article>
                <article>
                    <h3><a href='#'>CMYK erklärt</a> – </h3>
                    <p>der neueste <a href='/blog'>Blog</a>-Eintrag! <a href='#'>[mehr erfahren]</a></p>
                </article>
            </section>

            <section id='referenzen'>
                <h2>Referenzen</h2>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/dina-meyer.jpg' alt='Tina Ubuntu'>
                    <p><cite>Tina Ubuntu<br>CEO headless Ltd.</cite></p>
                    <blockquote>
                        <p>Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/thomas-meyer.jpg' alt='Tom Herzog'>
                    <p><cite>Tom Herzog<br>Cutter's Finest</cite></p>
                    <blockquote>
                        <p>Große Webkunst – keine Kunst mit Alex Mayer!</p>
                    </blockquote>
                </article>
                <article>
                    <img src='<?php echo get_template_directory_uri(); ?>/images/vorstand.jpg' alt='Vorstand Müller AG'>
                    <p><cite>Vorstand Müller AG<br>KR Ernst Anker, Dr. Florian Eisner</cite></p>
                    <blockquote>
                        <p>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</p>
                    </blockquote>
                </article>
                <div class='bluebox'></div>
            </section>
        </main>
        <footer>
    <div class='footerlayout'>
        <div>
            <p>&copy; Alex Mayer 2018</p>
        </div>
        <div>
            <a href='impressum'>Impressum</a>
            <a href='datenschutz'>Datenschutzerklärung</a>
        </div>
        <div>
            <p>Demo-Wordpress-Seite im Rahmen der LV ‚Content Mangagement Systeme‘ an der FH Salzburg von Vorname Nachname und Vorname Nachname</p> 
            <p>Alle Inhalte frei erfunden</p>
        </div>
    </div>
    <h2>Bildnachweis</h2>
    </div>
    <h3>Fotos</h3>
    <ul>
        <li>Herofoto Tastatur: Aman Anderson, http://de.freeimages.com/photo/illuminated-keyboard-124228</li>
        <li>Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas Meyer-Hermann) [GFDL (http://www.gnu.org/copyleft/fdl.html), CC BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0) or CC BY-SA 3.0 de (https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)], via Wikimedia Commons https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg</li>
        <li>Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand 2015.jpg|SKUelzen Vorstand 2015]] https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg</li>
    </ul>
    <h3>Icons</h3>
    <ul>
        <li>Freepik (http://www.freepik.com) / www.flaticon.com</li>
    </ul>
</footer>

</body>
</html>

