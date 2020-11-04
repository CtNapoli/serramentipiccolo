<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">

    <!-- Meta -->
    <meta name="description" content="La ditta Piccolo di Napoli si occupa di serramenti, infissi, tapparelle, zanzariere e tende da sole. Chiama ora per richiedere un preventivo"/>
    <meta name="siteType" value="Website Pro"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Serramenti ed Infissi | Napoli, NA | Piccolo"/>
    <meta name="twitter:description" content="La ditta Piccolo di Napoli si occupa di serramenti, infissi, tapparelle, zanzariere e tende da sole. Chiama ora per richiedere un preventivo"/>
    <meta property="og:description" content="La ditta Piccolo di Napoli si occupa di serramenti, infissi, tapparelle, zanzariere e tende da sole. Chiama ora per richiedere un preventivo"/>
    <meta property="og:title" content="Serramenti ed Infissi | Napoli, NA | Piccolo"/>
    <meta property="og:type" content="application">
    <meta property="og:site_name" content="Serramenti Piccolo">
    <meta property="og:url" content="https://serramentipiccolo.it">
    <meta property="og:image" content="<?= get_stylesheet_directory_uri() . '/assets/og-image.jpg'; ?>">
    <meta name="twitter:image" content="<?= get_stylesheet_directory_uri() . '/assets/og-image.jpg'; ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="full-header-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/slider-home/pergole.jpg'; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-7">
                                <div class="text-for-slider">
                                    <h3 class="big-size-font">Mai pensato di</h3>
                                    <h2 class="gotham-bold big-size-font text-uppercase">Controllare</h2>
                                    <div class="d-flex justify-content-center justify-content-xl-start">
                                        <h3 class="big-size-font">il &nbsp;</h3>
                                        <h2 class="gotham-bold big-size-font text-uppercase">Sole?</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/slider-home/zanzariera.jpg'; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-7">
                                <div class="text-for-slider">
                                    <h3 class="big-size-font">Stanco degli</h3>
                                    <h2 class="gotham-bold big-size-font text-uppercase">Insetti?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/slider-home/serramenti.jpg'; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-7">
                                <div class="text-for-slider">
                                    <h3 class="big-size-font">Vuoi maggiore</h3>
                                    <h2 class="gotham-bold big-size-font text-uppercase">Sicurezza?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="custom-next"><img src="<?= get_stylesheet_directory_uri() . '/assets/arrow-white-r.png'; ?>" alt="next"></div>
            <div class="custom-prev"><img src="<?= get_stylesheet_directory_uri() . '/assets/arrow-white-l.png'; ?>" alt="prev"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <header>
            <div class="container">
                <div class="row">
                    <div class="logo col-8 col-lg-3">
                        <h1>
                            <a href="/" alt="Serramenti Piccolo" title="Serramenti Piccolo">
                                <img src=<?=get_stylesheet_directory_uri() . '/assets/loghi/Logo.png';?> alt="Logo">
                            </a>
                        </h1>
                    </div>
                    <div class="desktop menu-wrapper col-lg-9">
                        <div class="menu secondary-font medium-size-font text-uppercase">
                            <a href="#our-works" title="I nostri lavori">I nostri lavori</a>
                            <a href="#our-products" title="I nostri prodotti">La nostra offerta</a>
                            <a href="#contact-us" title="Contatti">Contatti</a>
                        </div>
                    </div>
                    <div class="mobile col-4">
                        <div class="mobile-menu-toggle">
                            <div class="bar"></div>
                            <div class="bar short"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="menu">
                            <div class="close">
                                <img src=<?=get_stylesheet_directory_uri() . '/assets/close.png';?> alt="close">
                            </div>
                            <ul class="menu-items">
                                <li class="menu-header">
                                    <div class="d-grid">
                                        <a href="#our-works" title="I nostri lavori">I nostri lavori</a>
                                        <a href="#our-products" title="I nostri prodotti">La nostra offerta</a>
                                        <a href="#contact-us" title="Contatti">Contatti</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main>
