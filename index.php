<?php
require_once 'vendor/sentry/sentry/lib/Raven/Autoloader.php';
Raven_Autoloader::register();
$client = new Raven_Client('https://97a2c4614d14476fb46a1e40788c29f4:75bdf84c37ff4a8881d4dd1c370a87c9@sentry.io/224812');
$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maaike Koolmees - portfolio</title>

    <!-- styles -->
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
</head>
<body>
    <!-- Header -->
    <header role="banner" id="home">
        <nav role="navigation">
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    <a href="#">
                        <h2>Maaike Koolmees</h2>
                    </a>
                </div>
                <!-- / Logo -->

                <!-- Navigation bar -->
                <div class="navbar-inner">
                    <ul role="menu">
                        <li role="menuitem">
                            <a href="#home">Home</a>
                        </li>
                        <li role="menuitem">
                            <a href="#about">Over mij</a>
                        </li>
                        <li role="menuitem">
                            <a href="#portfolio">Projecten</a>
                        </li>
                        <li role="menuitem">
                            <a href="http://github.com/UnicornInReverse" class="icon" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li role="menuitem">
                            <a href="https://nl.linkedin.com/in/maaike-koolmees-1864b313a/" class="icon" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- / Navigation bar -->
            </div>
        </nav>

        <!-- Slogan -->
        <div class="slogan">
            <h1>Creative Technology</h1>
        </div>
        <!-- / Slogan -->

        <!-- Scroll to next section -->
        <a href="#about" class="nextSection easeScroll">
            <i class="fa fa-angle-down"></i>
        </a>
        <!-- / Scroll to next section -->
    </header>
    <!-- / Header -->

    <!-- About section -->
    <section id="about" class="page">
        <div class="container">
            <div class="title underline">
                <h2>Over mij</h2>
            </div>
            <div class="content">
                <!-- Information about me -->
                <div class="text-center text-block">
                    Mijn naam is Maaike Koolmees en op dit moment studeer ik Creative Media and Game Techologies aan de
                    Hogeschool Rotterdam. Tijdens mijn studie doe ik veel verschillende projecten, variërend van
                    serious games tot aan het redden van de bij. Hieronder is een selectie te vinden van de projecten
                    die ik gedaan heb:

                    <p>
                        <a href="#" id="showMore" class="btn">Meer over mij</a>
                    </p>
                </div>
                <!-- / Information about me -->

                <!-- More about me, collapse when button "show more" is pressed -->
                <div class="moreAboutMe">
                    <div class="col-6">
                        <!-- Who I'm -->
                        <h3 class="title">Blog</h3>
                        <p class="text-block text-center">
                            In het eerste jaar van mijn studie heb ik heb blog bijgehouden over alle dingen wat ik toen
                            gedaan heb. Deze blog is <a href="https://stud.hosted.hr.nl/0911174/" target="_blank">hier</a>
                            te vinden.
                        </p>
                        <!-- / Who I'm -->
                    </div>
                    <div class="col-6">
                        <!-- About Github -->
                        <h3 class="title">Github</h3>
                        <p class="text-block text-center">
                            Naast mijn blog zijn sommige projecten ook op mijn <a href="https://github.com/UnicornInReverse" target="_blank">Github</a>
                            te vinden. Het TicTacToe project dat er op staat is <a href="http://unicorninreverse.github.io/" target="_blank">hier</a>
                            te spelen.
                        </p>
                        <!-- / About Github -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About section -->

    <!-- Project section -->
    <section class="page bg-grey" id="portfolio">
        <div class="container">
            <div class="title underline">
                <h2>Projecten</h2>
            </div>
            <div class="content portfolio">
                <div class="col-4">
                    <!-- Portfolio item: BeeReady -->
                    <div class="item">
                        <img src="assets/img/portfolio/bee-ready.png" alt="BeeReady">
                        <div class="moreInfo">
                            <label for="beeReady">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: BeeReady -->
                </div>
                <div class="col-4">
                    <!-- Portfolio item: Shair -->
                    <div class="item">
                        <img src="assets/img/portfolio/shair.png" alt="Shair">
                        <div class="moreInfo">
                            <label for="shair">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: Shair -->
                </div>
                <div class="col-4">
                    <!-- Portfolio item: Feestboek -->
                    <div class="item">
                        <img src="assets/img/portfolio/feestboek.png" alt="Feestboek">
                        <div class="moreInfo">
                            <label for="feestboek">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: Feestboek -->
                </div>
            </div>
        </div>
    </section>
    <!-- / Project section -->

    <!-- Parallax scrolling window -->
    <div id="js-parallax-window" class="parallax-window">
        <div class="parallax-static-content">
        </div>
        <div id="js-parallax-background" class="parallax-background"></div>
    </div>
    <!-- / Parallax scrolling window -->

    <!-- 'What do I use and can I do' section -->
    <section class="page">
        <div class="container">
            <div class="content">
                <div class="owl-carousel">
                    <div><img src="assets/img/skills/git.png" alt="Git"> </div>
                    <div><img src="assets/img/skills/github.png" alt="github"> </div>
                    <div><img src="assets/img/skills/laravel.png" alt="Laravel"> </div>
                    <div><img src="assets/img/skills/phpstorm.png" alt="PHPStorm"> </div>
                    <div><img src="assets/img/skills/fablab.png" alt="fablab"> </div>
                    <div><img src="assets/img/skills/koffie.png" alt="Koffie"> </div>
                    <div><img src="assets/img/skills/sass.png" alt="Sass"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / 'What do I use and can I do' section -->

    <!-- Footer section -->
    <footer>
        <div class="container">
            <!-- Logo -->
            <div class="logo center">
                <a href="#">
                    <h2>Maaike Koolmees</h2>
                </a>
            </div>
            <!-- / Logo -->
            <!-- Copyright -->
            <div class="copyright">
                &copy; Copyright <?= date('Y') ?>. All Rights Reserved.
            </div>
            <!-- / Copyright -->
            <!-- Social Icons -->
            <div class="social-icons">
                <ul>
                    <li>
                        <a href="http://github.com/UnicornInReverse" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="mailto: maaikekoolmees@live.nl">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/maaike-koolmees-1864b313a/" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- / Social Icons -->
        </div>
    </footer>
    <!-- / Contact section -->

    <!-- Include portfolio-->
    <?php require_once 'partials/modals.php'; ?>
    <!-- / Include portfolio-->

    <!-- Scripts -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/pageload.js"></script>
</body>
</html>