<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    <link rel="stylesheet" href="style.css">

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://unpkg.com/stimulus/dist/stimulus.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/stimulus-carousel/dist/stimulus-carousel.umd.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $connected = false;

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOEception $e) {
        echo "Erreur : ".$e->getMessage();    
    }
?>




    <div class="header">
        <div class="ADD">
            <div class=""></div>
            <div class="sentece">
                <p>
                    Toujours dans ma poche : Des petits formats à petits prix, disponibles en librairie ! De 5.90€ à 9.90€.
                </p>
                <a>
                    découvrir
                </a>
            </div>
            <img src="img/svg/header/Close.svg" alt="Close">
        </div>
        <div class="headline">
            <div class="left-zone">
                <div class="others-website">
                    <div class="content">
                        <img src="img/svg/header/burger-menu.svg" alt="burger-menu">
                        <p>NOS AUTRES SITES</p>
                    </div>
                </div>
                <a class="espace-pro" href="dashboard/">
                    <p>Espace pro</p>
                    <img src="img/svg/header/v.svg" alt="v">
                </a>
            </div>
            <div class="right-zone">
                <div class="block">
                    <div class="RS">
                        <img src="img/svg/header/facebook.svg" alt="facebook">
                        <img src="img/svg/header/twitter.svg" alt="twitch">
                        <img src="img/svg/header/ytb.svg" alt="youtube">
                        <img src="img/svg/header/insta.svg" alt="instagrame">
                        <img src="img/svg/header/twitch.svg" alt="twitch">
                    </div>
                </div>
                <div class="NL">
                    <p>#READINGMYSUPERPOWER</p>
                    <img src="img/svg/header/mail.svg" alt="mail">
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="content">
                <div class="search">
                    <p>
                        Rechercher par genre, auteur...
                    </p>
                    <div class="btn">
                        <img src="img/svg/menu/search.svg" alt="search">
                    </div>
                </div>
                <div class="icons">
                    <div class="guide">
                        <img src="img/svg/menu/guide.svg" alt="guide">
                        <div class="content">
                            <div class="text">
                                <div class="haut">
                                    <p>GUIDE : </p>
                                    <p>TROUVER</p>
                                </div>
                                <p>MON COMICS</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart">
                        <div class="icon-cart">
                            <img src="img/svg/menu/cart.svg" alt="cart">
                            <div class="circle">
                                <p>35</p>
                            </div>
                        </div>
                        <div class="text">
                            <p>Panier</p>
                            <p>439,98e</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="low">
                <div class="entries">
                    <p>A paraitre</p>
                    <div class="catalogue">
                        <p>Catalogue</p>
                        <img src="img/svg/menu/v.svg" alt="v">
                    </div>
                    <p>Auters</p>
                    <p>Actualités</p>
                    <div class="personnages">
                        <p>Catalogue</p>
                        <img src="img/svg/menu/v.svg" alt="v">
                    </div>
                    <p>Par ou débuter ?</p>
                    <div class="bonus">
                        <p>NEW !</p>
                        <p>Bonus</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="sticky-RS">
        <div class="color">
            <div class="RS">
                <img src="img/svg/sticky-RS/facebook.svg" alt="facebook">
                <img src="img/svg/sticky-RS/twitter.svg" alt="twitter">
                <img src="img/svg/sticky-RS/youtube.svg" alt="youtube">
                <img src="img/svg/sticky-RS/instagrame.svg" alt="instagrame">
                <img src="img/svg/sticky-RS/twitch.svg" alt="twitch">
            </div>
        </div>
    </div>

    <div class="wrapper_slider u-ohidden main-container-slider">
       <div class="slider">
            <div data-controller="carousel" class="swiper-container"
            data-carousel-options-value='{"slidesPerView": "1", "centeredSlides" : true, "loop" : true, "navigation": {"nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": {"el": ".swiper-pagination"} }'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="overlay">
                            <img src="img/png/slider/slide2.png" alt="">
                            <div class="Bloc-text">
                                <p>Slide 1</p>
                                <p>DANS LE TOME 2 DE SUPERMAN INFINITE</p>
                                <p>
                                    Au terme du premier tome de cette série, 
                                    un Superman affaibli s’envolait 
                                    en compagnie des membres de The Authority 
                                    afin de libérer le Warworld du joug de Mongul.
                                </p>
                                <button>
                                    <p>DECOUVRIRE</p>
                                    <img src="img/svg/slider/decouvrire.svg" alt="fleche">
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="overlay">
                            <img src="img/png/slider/slide1.png" alt="">
                            <div class="Bloc-text">
                                <p>Slide 2</p>
                                <p>DANS LE TOME 2 DE SUPERMAN INFINITE</p>
                                <p>
                                    Au terme du premier tome de cette série, 
                                    un Superman affaibli s’envolait 
                                    en compagnie des membres de The Authority 
                                    afin de libérer le Warworld du joug de Mongul.
                                </p>
                                <button>
                                    <p>DECOUVRIRE</p>
                                    <img src="img/svg/slider/decouvrire.svg" alt="fleche">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="overlay">
                            <img src="img/png/slider/slide3.png" alt="">
                            <div class="Bloc-text">
                                <p>Slide 3</p>
                                <p>DANS LE TOME 2 DE SUPERMAN INFINITE</p>
                                <p>
                                    Au terme du premier tome de cette série, 
                                    un Superman affaibli s’envolait 
                                    en compagnie des membres de The Authority 
                                    afin de libérer le Warworld du joug de Mongul.
                                </p>
                                <button>
                                    <p>DECOUVRIRE</p>
                                    <img src="img/svg/slider/decouvrire.svg" alt="fleche">
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"><img src="img/svg/slider/fleche-droite.svg" alt="fleche-gauche"></div>
                <div class="swiper-button-prev"><img src="img/svg/slider/fleche-gauche.svg" alt="fleche-droite"></div>
            </div>
        </div>
    </div>

    <div class="Nouveautes">
        <div class="heading">
            <div class="text">
                <p>NOUVEAUTES</p>
                <p>DERNIERES SORTIES</p>
            </div>
            <button>
                <p>VOIR TOUTES LES NOUVEAUTES</p>
                <img src="img/svg/Nouveautes/arrow.svg" alt="fleche">
            </button>
        </div>

        <div class="wrapper_slider u-ohidden">
        
<?php
    $req = $bdd->query("SELECT * FROM `Last Release`");

    echo '<div data-controller="carousel" class="swiper-container" 
        data-carousel-options-value=\'{"slidesPerView": "4", "spaceBetween": 20, "freeMode" : true, "navigation": {"nextEl": ".swiper-button-next-N", "prevEl": ".swiper-button-prev-N"}, "scrollbar": {"el": ".swiper-scrollbar-N", "draggable" : true}}\'>';

    echo '<div class="swiper-wrapper">';

    while ($rep = $req->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="swiper-slide">';
        echo '<div class="sc">' . htmlspecialchars($rep['title']) . '</div>';
        echo '<div class="card">';
        echo '<img src="' . htmlspecialchars($rep['image']) . '" alt="' . htmlspecialchars($rep['title']) . '" loading="lazy" width="280" height="438">';
        echo '<div class="hover">';
        echo '<div class="section">';
        echo '<p>Sortie le ' . htmlspecialchars($rep['releaseDate']) . '</p>';
        echo '<p>' . htmlspecialchars($rep['title']) . ' TOME ' . htmlspecialchars($rep['tome']) . '</p>';
        echo '<div class="categorie">';
        echo '<div class="outline">' . htmlspecialchars($rep['tag1']) . '</div>';
        echo '<div class="outline">' . htmlspecialchars($rep['tag2']) . '</div>';
        echo '</div>';
        echo '</div>';
        echo '<button>';
        echo '<p>EN SAVOIR PLUS</p>';
        echo '<img src="img/svg/Nouveautes/arrow.svg" alt="fleche">';
        echo '</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
?>

            <div class="nav">
                <div class="swiper-button-prev-N"><img src="img/svg/slider/fleche-gauche.svg" alt="fleche-droite" loading="lazy"></div>
                <div class="swiper-scrollbar-N"></div>
                <div class="swiper-button-next-N"><img src="img/svg/slider/fleche-droite.svg" alt="fleche-gauche" loading="lazy"></div>
            </div>
    
        </div>
    </div>

    <div class="Gender-Univers">
        <div class="tabs">
            <div class="container" id="Genres-div">
                <img src="img/svg/gender-univers/arrow.svg" alt="fleche vers la droite" loading="lazy" id="Genres-arrow">
                <div class="content">
                    <p>RECHERCHER PAR</p>
                    <div class="counter">
                        <p>GENRES</p>
                        <div class="circle">
                            <p>7</p>
                        </div>
                    </div>
                    <button>
                        <p>VOIR TOUS LES GENRES</p>
                        <img src="img/svg/gender-univers/petite-fleche.svg" alt="petite-fleche" loading="lazy" id="Genres-btn">
                    </button>
                    <button onclick="GenresClicked()" id="g-m-btn" class="main-btn"></button>
                </div>
            </div>

            <div class="container" id="Univers-div">
                <img src="img/svg/gender-univers/arrow.svg" alt="fleche vers la droite" loading="lazy" id="Univers-arrow">
                <div class="content">
                    <p>EXPLORER LES</p>
                    <div class="counter">
                        <p>UNIVERS</p>
                        <div class="circle">
                            <p>72</p>
                        </div>
                    </div>
                    <button id="Univers-btn">
                        <p>VOIR TOUS LES UNIVERS</p>
                        <img src="img/svg/gender-univers/petite-fleche.svg" alt="petite-fleche" loading="lazy">
                    </button>
                </div>
                <button onclick="UniversClicked()" id="u-m-btn" class="main-btn"></button>
            </div>
        </div>


        <div class="slider-wrapper u-ohidden">
            <div data-controller="carousel" class="swiper-container" id="g-slider" 
                data-carousel-options-value='{"slidesPerView": "auto", "spaceBetween": 20, "freeMode" : true, "navigation": {"nextEl": ".swiper-button-next-U", "prevEl": ".swiper-button-prev-U"}}'>
    
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/batman.png" alt="batman" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #9E0C26;"></div>
                                    <p>AVENTURE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/jocker.png" alt="jocker" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #83929B;"></div>
                                    <p>DOCUMENTAIRE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/green.png" alt="image de green lanterne" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #0092C8;"></div>
                                    <p>SCIENCE-FICTION</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/batman.png" alt="batman" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #9E0C26;"></div>
                                    <p>AVENTURE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/jocker.png" alt="jocker" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #83929B;"></div>
                                    <p>DOCUMENTAIRE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/green.png" alt="image de green lanterne" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #0092C8;"></div>
                                    <p>SCIENCE-FICTION</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

        <div class="slider-wrapper u-ohidden" >
            <div data-controller="carousel" class="swiper-container" id="u-slider" 
                data-carousel-options-value='{"slidesPerView": "auto", "spaceBetween": 20, "freeMode" : true, "navigation": {"nextEl": ".swiper-button-next-U", "prevEl": ".swiper-button-prev-U"}}'>
    
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/jocker.png" alt="jocker" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #83929B;"></div>
                                    <p>MARVEL</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/batman.png" alt="batman" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #9E0C26;"></div>
                                    <p>DC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/green.png" alt="image de green lanterne" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #0092C8;"></div>
                                    <p>AUTRE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/jocker.png" alt="jocker" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #83929B;"></div>
                                    <p>MARVEL</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/batman.png" alt="batman" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #9E0C26;"></div>
                                    <p>DC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/png/Gender-Univers/green.png" alt="image de green lanterne" loading="lazy" width="370" height="470">
                            <div class="overlay">
                                <div class="content">
                                    <div class="square" style="background-color: #0092C8;"></div>
                                    <p>AUTRE</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="Actus">
        <p>LES NEWS</p>
        <p>DANS L'ACTUALITE</p>

        <div class="tags">

            <button class="tag active" onclick="ChangeActiveTag(0)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy" class="active">
                <p>Tout</p>
            </button>

            <button class="tag" onclick="ChangeActiveTag(1)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy">
                <p>Actualités</p>
            </button>

            <button class="tag" onclick="ChangeActiveTag(2)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy">
                <p>Concours</p>
            </button>

            <button class="tag" onclick="ChangeActiveTag(3)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy">
                <p>Fonds d'écran</p>
            </button>

            <button class="tag" onclick="ChangeActiveTag(4)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy">
                <p>Quiz</p>
            </button>

            <button class="tag" onclick="ChangeActiveTag(5)">
                <img src="img/svg/actus/check.svg" alt="check" loading="lazy">
                <p>Vidéo</p>
            </button>

        </div>

        <div class="articles">

            <div class="article">
                <img src="img/png/Actus/img1.png" alt="article">
                <div class="a-tags">
                    <p></p>
                </div>
                <p>FONDS D'ECRAN : DEADLY CLASS</p>
                <p>Le talent visuel de Wes CRAIG au service de la série la plus personnelle de Rick REMENDER est la recette parfaite pour une série de choc ! La suite de Deadly...</p>
                <button>
                    <img src="img/svg/actus/Vector-1.svg" alt="">
                </button>
            </div>

            <div class="article">
                <img src="img/png/Actus/img2.png" alt="article">
                <div class="a-tags">
                    <p></p>
                </div>
                <p>ALEX MAEEV : PORTFOLIO</p>
                <p>Le talent visuel de Wes CRAIG au service de la série la plus personnelle de Rick REMENDER est la recette parfaite pour une série de choc ! La suite de Deadly...</p>
                <button>
                    <img src="img/svg/actus/Vector-1.svg" alt="">
                </button>
            </div>

            <div class="article">
                <img src="img/png/Actus/img3.png" alt="article">
                <div class="a-tags">
                    <p></p>
                </div>
                <p>BATMAN DAY 2022 : SAVE THE DATE</p>
                <p>Le talent visuel de Wes CRAIG au service de la série la plus personnelle de Rick REMENDER est la recette parfaite pour une série de choc ! La suite de Deadly...</p>
                <button>
                    <img src="img/svg/actus/Vector-1.svg" alt="">
                </button>
            </div>
        </div>
        <button><p>VOIR LES ACTUS</p></button>
    </div>

    <div class="footer">

    </div>

    <script>
        const application = Stimulus.Application.start()

        application.register('carousel', window.StimulusCarousel);
    </script>

    <script src="script.js"></script>

</body>
</html>