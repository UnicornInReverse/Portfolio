<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rick van der Burg - portfolio</title>

    <!-- styles -->
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- Header -->
    <header role="banner" id="home">
        <nav role="navigation">
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    <a href="#">
                        <h2>Rick van der Burg</h2>
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
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li role="menuitem">
                            <a href="http://github.com/itsrd" class="icon" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li role="menuitem">
                            <a href="https://nl.linkedin.com/in/rickvdburg" class="icon" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- / Navigation bar -->
            </div>
        </nav>
        <!-- Slogan -->
        <div class="container">
            <div class="slogan">
                <h1>"Well begun is half done"</h1>
            </div>
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
                    Mijn naam is Rick van der Burg en ik studeer momenteel MediaTechnologie op Hogeschool Rotterdam. Naast studeren heb ik momenteel mijn eigen bedrijfje opgezet met als doel zoveel mogelijk te leren naast mijn schoolwerkzaamheden.  Voordat ik aan deze studie ben begonnen heb ik de studie MediaTechnologie gedaan op het Grafisch Lyceum Rotterdam, hierdoor heb ik veel ervaring op kunnen doen met verschillende programmeertalen.
                    <p>
                        <a href="#" id="showMore" class="btn">Meer over mij</a>
                    </p>
                </div>
                <!-- / Information about me -->

                <!-- More about me, collapse when button "show more" is pressed -->
                <div class="moreAboutMe">
                    <div class="col-6">
                        <!-- Who I'm -->
                        <h3 class="title">Rick van der Burg</h3>
                        <p class="text-block text-center">
                            Momenteel ben ik al 11 jaar bezig met het ontwikkelen van websites en nog steeds is het mijn dagelijkse bezigheid. Ik leer graag nieuwe programmeertalen en in de toekomst wil ik me meer gaan verdiepen in mobiele applicaties en beter worden in Laravel/PHP om zo nog betere websites te maken.
                        </p>
                        <!-- / Who I'm -->
                    </div>
                    <div class="col-6">
                        <!-- About Pixcero -->
                        <h3 class="title">Pixcero</h3>
                        <p class="text-block text-center">
                            Pixcero is mijn eigen bedrijf die ik ben gestart op 1 januari 2015. Sindsdien heb ik een hoop geleerd en hoop ik nog steeds elke dag bij te kunnen leren. Momenteel werk ik samen met 3 andere ZZP'ers om op deze manier mooie websites neer te zetten en te leren van elkaar.
                        </p>
                        <!-- / About Pixcero -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About section -->

    <!-- Portfolio section -->
    <section class="page bg-grey" id="portfolio">
        <div class="container">
            <div class="title underline">
                <h2>Portfolio</h2>
            </div>
            <div class="content portfolio">
                <div class="col-4">
                    <!-- Portfolio item: Schoonheidssalon Mandy -->
                    <div class="item">
                        <img src="assets/img/portfolio/schoonheidssalonmandy-small.png" alt="Schoonheidssalon Mandy">
                        <div class="moreInfo">
                            <label for="schoonheidssalonMandy">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: Schoonheidssalon Mandy -->
                </div>
                <div class="col-4">
                    <!-- Portfolio item: 4Staying -->
                    <div class="item">
                        <img src="assets/img/portfolio/4staying-small.png" alt="4Staying">
                        <div class="moreInfo">
                            <label for="4staying">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: 4Staying -->
                </div>
                <div class="col-4">
                    <!-- Portfolio item: PlayPlastic -->
                    <div class="item">
                        <img src="assets/img/portfolio/playplastic-small.png" alt="PlayPlastic">
                        <div class="moreInfo">
                            <label for="playplastic">
                                Meer informatie
                            </label>
                        </div>
                    </div>
                    <!-- / Portfolio item: PlayPlastic -->
                </div>
            </div>
        </div>
    </section>
    <!-- / Portfolio section -->

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
                    <div><img src="assets/img/skills/wordpress.png" alt="Wordpress"> </div>
                    <div><img src="assets/img/skills/ubuntu.png" alt="Ubuntu"> </div>
                    <div><img src="assets/img/skills/phpstorm.png" alt="PHPStorm"> </div>
                    <div><img src="assets/img/skills/slack.png" alt="Slack"> </div>
                    <div><img src="assets/img/skills/asana.png" alt="Asana"> </div>
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
                    <h2>Rick van der Burg</h2>
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
                        <a href="http://github.com/itsrd" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="mailto: rickvdburg@live.nl">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/in/rickvdburg" target="_blank">
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