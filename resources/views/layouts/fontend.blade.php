<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sport.AK</title>
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
        <link href="{{ env('APP_ASSET') }}assets/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
        <link href="{{ env('APP_ASSET') }}assets/css/akslider.css" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_ASSET') }}assets/css/donate.css" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_ASSET') }}assets/css/theme.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <style>
        .success_use {
            border-color: #2b542c !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168 !important;
        }

        .error_use {
            border-color: #843534 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483 !important;
        }

    </style>
</head>

<body class="tm-isblog">
        <div class="preloader">
                <div class="loader"></div>
            </div>
        
        
            <div class="over-wrap">
                <div class="toolbar-wrap">
                    <div class="uk-container uk-container-center">
                        <div class="tm-toolbar uk-clearfix uk-hidden-small">
        
        
                            <div class="uk-float-right">
                                <div class="uk-panel">
                                    <div class="social-top">
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
        
                <div class="tm-menu-box">
        
                    <div style="height: 70px;" class="uk-sticky-placeholder">
                        <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                            <div class="uk-container uk-container-center">
                                <a class="tm-logo uk-float-left" href="index.html">
                                    <img src="images/logo-img.png" alt="logo" title="logo"> <span>Sport<em>.ak</em></span>
                                </a>
        
                                <ul class="uk-navbar-nav uk-hidden-small">
                                    <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="index.html">Home</a>
                                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                            <div class="uk-grid uk-dropdown-grid">
                                                <div class="uk-width-1-1">
                                                    <ul class="uk-nav uk-nav-navbar">
                                                        <li><a class="yellow-scheme" href="../yellow/index.html">Yellow Color Scheme</a>
                                                        </li>
                                                        <li><a class="blue-scheme" href="../blue/index.html">Blue Color Scheme</a>
                                                        </li>
                                                        <li><a class="red-scheme" href="../red/index.html">Red Color Scheme</a>
                                                        </li>
                                                        <li><a href="offline.html">Offline Page</a>
                                                        </li>
                                                        <li><a href="404.html">Error Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="about.html">About</a></li>
                                    <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Pages</a>
                                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                            <div class="uk-grid uk-dropdown-grid">
                                                <div class="uk-width-1-1">
                                                    <ul class="uk-nav uk-nav-navbar">
                                                        <li><a href="players.html">Players</a>
                                                        </li>
                                                        <li><a href="gallery.html">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="match-list.html">Match</a>
                                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                            <div class="uk-grid uk-dropdown-grid">
                                                <div class="uk-width-1-1">
                                                    <ul class="uk-nav uk-nav-navbar">
                                                        <li><a href="results.html">Results</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="news.html">News</a>
                                    </li>
                                    <li><a href="category.html">Shop</a>
                                    </li>
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                            </div>
                        </nav>
                    </div>
        
                </div>
        
                <div class="tm-top-a-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="akslider-module ">
                                        <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                            <ul class="uk-slideshow uk-overlay-active">
                                                <li aria-hidden="false" class="uk-height-viewport uk-active">
                                                    <div style="background-image: url(images/main-slider-img.jpg);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img.jpg" alt="">
                                                    <div class="uk-position-cover uk-flex-middle">
                                                        <div class="uk-container uk-container-center uk-position-cover">
                                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                                <h3>Life is <span>about timing</span></h3>
                                                                <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                                <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li aria-hidden="true" class="uk-height-viewport">
                                                    <div style="background-image: url(images/main-slider-img1.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img1.jpg" alt="">
                                                    <div class="uk-position-cover uk-flex-middle">
                                                        <div class="uk-container uk-container-center uk-position-cover">
                                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                                <h3>Just play.<span>Have fun.</span></h3>
                                                                <div class="promo-sub">Life is <span>about timing</span> Enjoy the game</div>
                                                                <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li aria-hidden="true" class="uk-height-viewport">
                                                    <div style="background-image: url(images/main-slider-img2.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img2.jpg" alt="">
                                                    <div class="uk-position-cover uk-flex-middle">
                                                        <div class="uk-container uk-container-center uk-position-cover">
                                                            <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                                <h3>Life is <span>about timing</span></h3>
                                                                <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                                <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                                <li class="uk-active" data-uk-slideshow-item="0"><a href="/">0</a>
                                                </li>
                                                <li data-uk-slideshow-item="1"><a href="/">1</a>
                                                </li>
                                                <li data-uk-slideshow-item="2"><a href="/">2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
        
                <div class="tm-top-b-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
        
                                    <div class="va-latest-wrap">
                                        <div class="uk-container uk-container-center">
                                            <div class="va-latest-top">
                                                <h3>Latest <span>Results</span></h3>
                                                <div class="tournament">
                                                    <address>Cambridgeshire UK<br><br></address> </div>
                                                <div class="date">
                                                    November 29, 2015 | 12:00 am </div>
                                            </div>
                                        </div>
                                        <div class="va-latest-middle uk-flex uk-flex-middle">
                                            <div class="uk-container uk-container-center">
                                                <div class="uk-grid uk-flex uk-flex-middle">
                                                    <div class="uk-width-2-12 center">
                                                        <a href="results.html">
                                                            <img src="images/club-logo.png" class="img-polaroid" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="uk-width-3-12 name uk-vertical-align">
                                                        <div class="wrap uk-vertical-align-middle">
                                                            Cambridgehire </div>
                                                    </div>
                                                    <div class="uk-width-2-12 score">
                                                        <div class="title">score</div>
                                                        <div class="table">
                                                            <div class="left"> 3</div>
                                                            <div class="right"> 5</div>
                                                            <div class="uk-clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-3-12 name alt uk-vertical-align">
                                                        <div class="wrap uk-vertical-align-middle">
                                                            china </div>
                                                    </div>
                                                    <div class="uk-width-2-12 center">
                                                        <a href="results.html">
                                                           <img src="images/club-logo1.png" class="img-polaroid" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-container uk-container-center">
                                            <div class="va-latest-bottom">
                                                <div class="uk-grid">
                                                    <div class="uk-width-8-12 uk-container-center text">
                                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus. Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis massa. Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                                    </div>
                                                </div>
        
                                                <div class="uk-grid">
                                                    <div class="uk-width-1-1">
                                                        <div class="btn-wrap uk-container-center">
                                                            <a class="read-more" href="results.html">More Info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
        
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
        
                <div class="tm-top-c-box tm-full-width  home-about">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1 uk-width-large-1-2">
                                <div class="uk-panel">
                                    <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                                        <div class="va-about-text">
                                            <div class="title">About <span>Team</span>
                                            </div>
                                            <p>Nam quis purus sed est interdum sagittis sed in leo. Nunc feugiat enim nunc, sit amet placerat erat consectetur in. Cras consequat enim nunc, sit amet venenatis massa volutpat ut. Cras vitae facilisis nulla. </p>
                                            <p>Nulla pharetra lobortis nisl, vitae pretium nunc congue eget. Nunc imperdiet consequat nibh pharetra venenatis. Duis vitae lacinia nibh, et egestas leo. Proin sed mi sit amet dolor rhoncus tristique. Maecenas rhoncus felis vel congue commodo.</p>
                                            <a class="read-more" href="about.html">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="uk-width-1-1 uk-width-large-1-2">
                                <div style="min-height: 497px;" class="uk-panel">
                                    <div class="trainers-module tm-trainers-slider ">
                                        <div class="trainer-wrapper">
                                            <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                                <div class="trainer-top">
                                                    <div class="trainers-btn">
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                                    </div>
                                                    <h3>Trainers</h3>
                                                </div>
                                                <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                                    <li class="uk-active" style="">
                                                        <div class="img-wrap"><img src="images/trainer-slider/trainer-img.jpg" alt="">
                                                        </div>
                                                        <div class="name">Bernard <span>Fernandez</span>
                                                        </div>
                                                    </li>
                                                    <li style="display: none;">
                                                        <div class="img-wrap"><img src="images/trainer-slider/trainer-img1.jpg" alt="">
                                                        </div>
                                                        <div class="name">Fernand <span>Bernardez</span>
                                                        </div>
                                                    </li>
                                                    <li style="display: none;">
                                                        <div class="img-wrap"><img src="images/trainer-slider/trainer-img2.jpg" alt="">
                                                        </div>
                                                        <div class="name">Martin <span>Huanez</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
        
                <div class="tm-top-d-box  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="donate-wrap">
                                        <div class="donate-inner">
                                            <h3><span>Support</span> Team</h3>
                                            <div class="uk-grid">
                                                <div class="uk-width-8-10 uk-push-1-10 intro-text">
                                                    Donec ultrices pharetra bibendum. Aliquam velit tortor, maximus gravida nunc vitae, tincidunt dignissim erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi nec nisl a augue aliquam fringilla ac consectetur enim. Nullam sed pretium elit, eget fringilla nunc. </div>
                                            </div>
                                            <form class="teamdonate-form" method="post" target="paypal">
                                                <div class="radio-wrap">
                                                    <label class="active">$ 5
                                                        <input name="amount" value="5" type="radio">
                                                    </label>
                                                    <label>$ 10
                                                        <input name="amount" value="10" type="radio">
                                                    </label>
                                                    <label>$ 25
                                                        <input name="amount" value="25" type="radio">
                                                    </label>
                                                    <label>$ 50
                                                        <input name="amount" value="50" type="radio">
                                                    </label>
                                                    <label>$ 75
                                                        <input name="amount" value="75" type="radio">
                                                    </label>
                                                    <label>$ 100
                                                        <input name="amount" value="100" type="radio">
                                                    </label>
                                                </div>
                                                
                                                <br>
                                                <br>
                                                <button class="donate-btn" type="submit" name="submit"><span>Donate</span>
                                                </button>
        
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
        
                <div class="tm-top-e-box tm-full-width  va-main-next-match">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid uk-grid-collapse">
                                            <div class="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                                <div class="va-main-next-wrap">
                                                    <div class="main-next-match-title"><em>Next <span>Match</span></em>
                                                    </div>
                                                    <div class="match-list-single">
                                                        <div class="match-list-item">
                                                            <div class="count">
                                        
                                                                <div id="countdown4">
                                                                    <div class="counter_container">
                                                                    </div>
                                                                </div>
        
                                                                <div class="clearfix"></div>
        
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">England </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">Amsterdam </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="date">November 14, 2015 | 12:00 am </div>
                                                            <div class="clear"></div>
                                                            <div class="location"><address>Cambridgeshire UK<br><br></address> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                                <div class="match-list-wrap">
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 29, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">Cambridgehire </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">china </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava1.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 20, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">Cambridgehire </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">
                                                                china </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 14, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava4.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">England </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">Amsterdam </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava5.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 29, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">Cambridgehire </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">
                                                                china </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava1.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 20, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava2.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">King </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">china </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava3.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 14, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava4.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">England </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">Amsterdam </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava5.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
        
                                                    <div class="match-list-item alt">
                                                        <div class="date">November 29, 2015 </div>
                                                        <div class="wrapper">
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                            <div class="team-name">Cambridgehire </div>
                                                            <div class="versus">VS</div>
        
                                                            <div class="team-name">china </div>
                                                            <div class="logo">
                                                                <a href="match-single.html">
                                                                    <img src="images/team-ava.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-top-f-box tm-full-width  va-main-our-news">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                                            <div class="uk-width-1-1">
                                                <div class="our-news-title">
                                                    <h3>Our <span>News</span></h3>
                                                </div>
                                                <div class="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                                    <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                            </div>
        
                                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                                <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg); min-height: 280px;">
        
        
                                                    <a href="news-single.html"></a>
                                                    <img class="uk-invisible" src="images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg" alt="">
        
                                                </div>
                                                <div style="min-height: 280px;" class="info">
                                                    <div class="date">
                                                        Nov 20, 2015 </div>
                                                    <div class="name">
                                                        <h4>
                                                            <a href="news-single.html">Nullam enim ante, volutpat non viverra eget </a>	
                                                        </h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                                        <div class="read-more"><a href="news-single.html">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </article>
        
        
                                            <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                                <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(images/534579b3c373c09398691a46025fe5e6.jpg); min-height: 280px;">
        
        
                                                    <a href="news-single.html"></a>
                                                    <img class="uk-invisible" src="images/534579b3c373c09398691a46025fe5e6.jpg" alt="">
        
                                                </div>
                                                <div style="min-height: 280px;" class="info">
                                                    <div class="date">
                                                        Nov 20, 2015 </div>
                                                    <div class="name">
                                                        <h4>
                                                            <a href="news-single.html">Cum sociis natoque penatibus et magnis dis parturient</a>		
                                                        </h4>
                                                    </div>
                                                    <div class="text">
                                                        <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                                        <div class="read-more"><a href="news-single.html">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </article>
        
                                        </div>
                                    </div>
                                    <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                                    </div>
        
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-top-g-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
        
                                    <div class="gallery-title">
                                        <div class="uk-container uk-container-center tt-gallery-top-main">
                                            <div class="uk-grid" data-uk-grid-match="">
                                                <div class="uk-width-3-10 title">Gallery</div>
                                                <div class="uk-width-7-10 text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-sticky-placeholder">
                                        <div style="margin: 0px;" class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                            <div class="uk-container uk-container-center">
                                                <button class="active" data-filter="*">all</button>
                                                <button data-filter=".tt_c26e2589e25045ad516b5bc37d18523a">Volleyball</button>
                                                <button data-filter=".tt_6081becaf04f5a1455407d73e09bca13">Hockey</button>
                                                <button data-filter=".tt_c71a18083d9e74b4a5c5d8d9a17d68d0">Basketball</button>
                                                <button data-filter=".tt_449a5f6d01d5f416810d04b4df596b6a">Football</button>
                                                <button data-filter=".tt_ea9d8d12fefde9e2f9c4631a76504ce7">Rugby</button>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div id="boundary">
        
                                        <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
        
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item article-slider tt_c26e2589e25045ad516b5bc37d18523a ">
                                                <div class="uk-slidenav-position" data-uk-slideshow="{height:300}">
                                                    <ul class="uk-slideshow">
                                                        <li class="uk-active" aria-hidden="false">
                                                            <div style="background-image: url(images/1448838000_1662651f7f781a887707a2836033aa63.jpg);" class="uk-cover-background uk-position-cover"></div>
                                                            <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="images/1448838000_1662651f7f781a887707a2836033aa63.jpg" alt="">
                                                            <div class="titles">
                                                                <div class="sub-title">
                                                                    Donec vel orci sed leo semper viverra </div>
                                                            </div>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <div style="background-image: url(images/1448838000_7e2a4fc5579be1e525f7b338af8bcc4e.jpg);" class="uk-cover-background uk-position-cover"></div>
                                                            <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="images/1448838000_7e2a4fc5579be1e525f7b338af8bcc4e.jpg" alt="">
                                                            <div class="titles">
                                                                <div class="sub-title">
                                                                    Donec vel orci sed leo semper viverra </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="article-slider-btn">
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                                <div class="gallery-album">
                                                    <a href="images/03f1869954e6e557b8ac56b508030a3b.jpg" data-uk-lightbox="{group:'my-group'}" class="img-0">
                                                        <img src="images/03f1869954e6e557b8ac56b508030a3b.jpg" alt="">
                                                    </a>
                                                    <a href="images/6a987145d42263cbfc9724ee737b1d60.jpg" data-uk-lightbox="{group:'my-group'}" class="img-1">
                                                        <img src="images/6a987145d42263cbfc9724ee737b1d60.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Volleyball </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_6081becaf04f5a1455407d73e09bca13 ">
                                                <div class="gallery-album">
                                                    <a href="images/8cc1994dde069571bfe5edf1e7822185.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-0">
                                                        <img src="images/8cc1994dde069571bfe5edf1e7822185.jpg" alt="">
                                                    </a>
                                                    <a href="images/133dc45d6c6a6ee8ace3fd6c18f0c79e.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-1">
                                                        <img src="images/133dc45d6c6a6ee8ace3fd6c18f0c79e.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Hockey </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_6081becaf04f5a1455407d73e09bca13 ">
                                                <div class="gallery-album">
                                                    <a href="images/62448a01125cebccfa3512491a345da9.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-0">
                                                        <img src="images/62448a01125cebccfa3512491a345da9.jpg" alt="">
                                                    </a>
                                                    <a href="images/14f0c92ade7d754a98d2b6ddd4fe560a.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-1">
                                                        <img src="images/14f0c92ade7d754a98d2b6ddd4fe560a.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Hockey </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 ">
                                                <div class="gallery-album">
                                                    <a href="images/c9e61645f3f740197afa7fb17bf3d3ad.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-0">
                                                        <img src="images/c9e61645f3f740197afa7fb17bf3d3ad.jpg" alt="">
                                                    </a>
                                                    <a href="images/a46d465cb53412b43c73d9c793083875.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-1">
                                                        <img src="images/a46d465cb53412b43c73d9c793083875.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Basketball </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 ">
                                                <div class="gallery-album">
                                                    <a href="images/d5d9d0e4068673aee603250d1eb43af8.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-0">
                                                        <img src="images/d5d9d0e4068673aee603250d1eb43af8.jpg" alt="">
                                                    </a>
                                                    <a href="images/6479eff8244e3eeb793efa29559f45f7.png" data-uk-lightbox="{group:'my-group4'}" class="img-1">
                                                        <img src="images/6479eff8244e3eeb793efa29559f45f7.png" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Basketball </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_449a5f6d01d5f416810d04b4df596b6a tt_c71a18083d9e74b4a5c5d8d9a17d68d0 tt_ea9d8d12fefde9e2f9c4631a76504ce7 ">
                                                <div class="gallery-album">
                                                    <a href="images/49633121e88e2125a7069937885d5163.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-0">
                                                        <img src="images/49633121e88e2125a7069937885d5163.jpg" alt="">
                                                    </a>
                                                    <a href="images/4510067e63319389d8587e2cb12d4346.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-1">
                                                        <img src="images/4510067e63319389d8587e2cb12d4346.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Douglas Payne </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                                <div class="gallery-album">
                                                    <a href="images/fb04791e435ada34da98c5ca40642149.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                        <img src="images/fb04791e435ada34da98c5ca40642149.jpg" alt="">
                                                    </a>
                                                    <a href="images/20e17d247276908ce9c879c785afad72.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                        <img src="images/20e17d247276908ce9c879c785afad72.jpg" alt="">
                                                    </a>
                                                    <div class="titles">
                                                        <div class="title">Douglas Payne </div>
                                                        <div class="sub-title">Douglas Payne </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-bottom-a-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-bottom-a" class="tm-bottom-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
                                <div class="uk-panel tt-achievments-wrap">
                                    <div class="uk-grid uk-grid-collapse">
                                        <div class="uk-width-large-4-10 uk-width-medium-1-1 achievments-block">
                                            <div class="our-awards-main-wrap">
                                                <div class="uk-slidenav-position our-awards" data-uk-slider="{autoplay:true, autoplayInterval:7000}">
                                                    <div class="our-awards-main-title">
                                                        <h2>Our <span>Awards</span></h2>
                                                        <div class="our-awards-btn">
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                            <a draggable="false" href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                                                        </div>
                                                    </div>
                                                    <div class="uk-slider-container">
                                                        <ul class="uk-slider uk-grid uk-grid-width-large-1-2">
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img5.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                            <li>
                                                                <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                                                </div>
                                                                <div class="text">2014 world cup champion</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-large-5-10 uk-width-medium-1-1 achievments-block uk-push-1-10">
                                            <div class="achievments-inner">
                                                <div class="our-awards-main-title">
                                                    <h2>achievements</h2>
                                                </div>
                                                <div class="uk-grid">
                                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                        <div class="item">
                                                            <div class="icon"><img src="images/stat-icon.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="number">35</div>
                                                                <div class="text">goals</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                        <div class="item">
                                                            <div class="icon"><img src="images/stat-icon1.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="number">12</div>
                                                                <div class="text">games played</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                        <div class="item">
                                                            <div class="icon"><img src="images/stat-icon2.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="number">13</div>
                                                                <div class="text">violations</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                                        <div class="item">
                                                            <div class="icon"><img src="images/stat-icon3.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="number">8</div>
                                                                <div class="text">Awards</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-bottom-b-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="our-team-main-wrap">
                                        <div class="uk-container uk-container-center">
                                            <div class="uk-grid" data-uk-grid-match="">
                                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                                    <div class="our-team-wrap">
                                                        <div class="our-team-title">
                                                            <h3>Our <span>Team</span></h3>
                                                        </div>
                                                        <div class="our-team-text">
                                                            <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                        </div>
                                                        <div class="our-team-text additional">
                                                            <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                        </div>
                                                        <div class="team-read-wrap"><a class="team-read-more" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>21</span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/494a6c4fd56d9d2af64b92b6337db693.jpg" class="img-polaroid" alt="Steven Webb" title="Steven Webb">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Steven Webb </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">DEFENDER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number">
                                                                    <span>19</span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/df207a70fca3a58b07082ce9aca2c538.jpg" class="img-polaroid" alt="John Montgomery" title="John Montgomery">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">John Montgomery </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">STRIKER</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number">
                                                                    <span>35</span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/bd84c3b0e76d2dd99a75ac9ca2f6ec06.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3><a href="player.html">Johnny Thompson</a></h3>
                                                                </div>
                                                                <div class="position">goalkeeper </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>07</span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/f9bfc5bc85499506c9e18e5afb2eaf2d.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Benjamin Mendoza </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">DEFENDER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>47 </span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/70d6fcd7a5ed8edc8acc6b52c76d7ff4.jpg" class="img-polaroid" alt="Joe Perez" title="Joe Perez">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Joe Perez </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">STRIKER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_4d957768dcc72908ab3b9e28dc867052">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>23 </span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/450032a6f795065465ebb3d698d74294.jpg" class="img-polaroid" alt="Bobby Guerrero" title="Bobby Guerrero">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Bobby Guerrero  </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">MIDFIELDER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>14 </span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/a0cd8e2687c86ec4810f4adec5724bba.jpg" class="img-polaroid" alt="Douglas Pain" title="Douglas Pain">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Douglas Pain </a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">DEFENDER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_22c19cd174143e3b4c7ef40ae23c5d1a">
                                                    <div class="player-article">
                                                        <div class="wrapper">
                                                            <div class="img-wrap">
                                                                <div class="player-number"><span>36 </span>
                                                                </div>
                                                                <div class="bio"><span><a href="player.html">bio</a></span>
                                                                </div>
                                                                <a href="player.html">
                                                                    <img src="images/8a3d3554567e4859f88a93ac59e1eadc.jpg" class="img-polaroid" alt="Christopher Herrera" title="Christopher Herrera">
                                                                </a>
                                                                <ul class="socials">
                                                                    <li class="twitter">
                                                                        <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="facebook">
                                                                        <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="google-plus">
                                                                        <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="pinterest">
                                                                        <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                    <li class="linkedin">
                                                                        <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="info">
                                                                <div class="name">
                                                                    <h3>
                                                                        <a href="player.html">Christopher Herrera</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="position">STRIKER </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
        
                                        <div class="our-team-btn"><a href="players.html"><span>More Info</span></a>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-bottom-c-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-bottom-c" class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="shop-main-page-wrap">
                                        <div class="container uk-container-center">
                                            <div class="uk-grid">
                                                <div class="uk-width-1-1">
                                                    <div class="shop-title">
                                                        <h2>Fun <span>Shop</span></h2>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                                    <div class="shop-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                                </div>
                                                <div class="uk-width-1-1 uk-text-center">
                                                    <div class="sale-proposal">Save <span>33% OFF</span> for all new orders</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest_products jshop">
        
                                            <div data-uk-slider="{center:true, autoplay:true, pauseOnHover:true, autoplayInterval:5000}">
        
                                                <div class="uk-slider-container">
                                                    <ul class="uk-slider uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-1  uk-grid uk-grid-medium">
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="images/img_products/thumb_Jacket31.jpg" alt="Sportswear outerwear coats">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Sportswear outerwear coats</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$100</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$151</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="images/img_products/thumb_Jacket31.jpg" alt="Sportswear outerwear coats">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Sportswear outerwear coats</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$100</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$151</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket24.jpg" alt="Waterproof jackets">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Waterproof jackets</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$200</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$120</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket241.jpg" alt="Waterproof jackets">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Waterproof jackets</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$200</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$120</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_jacket71.jpg" alt="Thermoball Insulated Jacket">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Thermoball Insulated Jacket</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$100</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$78</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_jacket711.jpg" alt="Thermoball Insulated Jacket">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">Thermoball Insulated Jacket</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$100</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$78</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross142.jpg" alt="High Quality Running Shoes For Women">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$400</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$350</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross121.jpg" alt="High Quality Running Shoes For Women">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$400</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$350</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item uk-active">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross131.jpg" alt="High Quality Running Shoes For Woman">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$300</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$250</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross111.jpg" alt="High Quality Running Shoes For Women">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$400</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$350</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="{{ env('APP_ASSET') }}assets/images/img_products/">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross102.jpg" alt="High Quality Running Shoes For Woman">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$300</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$250</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross91.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$400</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$350</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross81.jpg" alt="High Quality Running Shoes For Woman">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$190</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$200</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross51.jpg" alt="High Quality Running Shoes For Woman">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For  Woman</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$190</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$200</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross61.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$200</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$280</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_100-original-New-2015-cross41.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$250</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$200</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross32.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$190</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$250</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross22.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$190</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$150</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_cross23.jpg" alt="High Quality Running Shoes For Men">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$250</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$200</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                        <li class="block_item">
        
                                                            <div class="image">
                                                                <div class="image_block">
                                                                    <a draggable="false" href="product.html">
                                                                        <img draggable="false" class="jshop_img" src="{{ env('APP_ASSET') }}assets/images/img_products/thumb_jacket63.jpg" alt="High-quality Men's Sport Suit">
                                                                    </a>
                                                                </div>
                                                                <div class="name">
                                                                    <a draggable="false" href="product.html">High-quality Men's Sport Suit</a>
                                                                </div>
                                                            </div>
                                                            <div class="actions-wrap">
                                                                <div class="price-wrap">
                                                                    <div class="old_price"><span>$200</span>
                                                                    </div>
        
                                                                    <div class="jshop_price">
                                                                        <span>$120</span>
                                                                    </div>
                                                                </div>
        
                                                                <div class="buttons">
                                                                    <a draggable="false" class="button_buy" href="#">Buy</a>
                                                                </div>
        
                                                            </div>
                                                        </li>
        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fun-shop-btn">
                                            <a href="category.html"><span>View all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-bottom-d-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="last-video-wrap">
                                        <div class="uk-container uk-container-center">
                                            <div class="uk-grid">
                                                <div class="uk-width-medium-1-1">
                                                    <div class="last-video-title">
                                                        <h2>Last <span>Video</span></h2>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                                    <div class="last-video-text">
                                                        Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                                    <iframe src="https://www.youtube.com/embed/_u20ZIIxwuc?rel=0&amp;showinfo=0" allowfullscreen="" height="546" width="970"></iframe>
                                                </div>
                                                <div class="uk-width-medium-1-1 uk-width-small-1-1 partners-slider">
                                                    <div data-uk-slideset="{small: 2, medium: 5, large: 5}">
                                                        <div class="uk-slidenav-position">
                                                            <ul class="uk-grid uk-slideset uk-grid-width-1-1 uk-grid-width-large-1-5 uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img1.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img2.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img3.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img4.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img1.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img2.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img3.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img4.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img1.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img2.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img3.png" alt="">
                                                                </li>
                                                                <li><img src="{{ env('APP_ASSET') }}assets/images/partners-img4.png" alt="">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="tm-bottom-e-box tm-full-width  ">
                    <div class="uk-container uk-container-center">
                        <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                            <div class="uk-width-1-1">
                                <div class="uk-panel">
                                    <div class="map-wrap">
        
                                        <div class="contact-form-wrap uk-flex">
                                            <div class="uk-container uk-container-center uk-flex-item-1">
                                                <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                                    <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                        <div class="contact-info-lines uk-vertical-align-middle">
                                                            <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>(846)-356-9322</div>
                                                            <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:support@torbara.com">support@torbara.com</a>
                                                                
                                                            </div>
                                                            <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span>9478 Chestnut Street, Woodstock, GA 30188</div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                        <div class="contact-form uk-height-1-1">
                                                            <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                                <div class="contact-form-title">
                                                                    <h2>Get in touch</h2>
                                                                </div>
                                                                <div id="aiContactSafe_form_1">
                                                                    <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                        <div class="contentpaneopen">
                                                                            <div id="aiContactSafeForm">
                                                                                <form  method="post" id="adminForm_1" name="adminForm_1">
                                                                                    <div id="displayAiContactSafeForm_1">
                                                                                        <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                            <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                                    <label class="required_field">*</label>
                                                                                                </div>
                                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                                    <input name="aics_name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                                    <label class="required_field">*</label>
                                                                                                </div>
                                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                                    <input name="aics_email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                                <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                                    <label class="required_field">*</label>
                                                                                                </div>
                                                                                                <div class="aiContactSafe_contact_form_field_right">
                                                                                                    <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <br>
                                                                                    <div id="aiContactSafeBtns">
                                                                                        <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                                            <table style="margin-left:auto; margin-right:auto;">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                                        </td>
                                                                                                        <td id="td_aiContactSafeSendButton">
                                                                                                            <input id="aiContactSafeSendButton" value="Send" type="submit">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            window.map = false;
                                                                    
                                            
                                                                    
                                            function initialize(){
                                                var myLatlng = new google.maps.LatLng(50.3915097,-4.1306689);
                                            
                                                var mapOptions = {
                                                    zoom:16,
                                                    center: myLatlng,
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                    scrollwheel: false,
        
                                                    streetViewControl:false,
                                                    overviewMapControl:false,
                                                    mapTypeControl:false    
                                                    
                                                };
                                                
                                                window.map = new google.maps.Map(document.getElementById('map'), mapOptions);                                                                                                                                                                                                                                                                               
                                                
                                            }
                                        
                                            google.maps.event.addDomListener(window, 'load', initialize);
                                        </script>            
                                    <div id="map"></div>
                                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        
                <div class="bottom-wrapper">
                    <div class="tm-bottom-f-box  ">
                        <div class="uk-container uk-container-center">
                            <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                                <div class="uk-width-1-1">
                                    <div class="uk-panel">
                                        <div class="footer-logo">
                                            <a href="/"><img src="images/footer-logo-img.png" alt=""><span>Sport</span>.ak</a>
                                        </div>
                                        <div class="footer-socials">
                                            <div class="social-top">
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
        
                                        <p class="footer-about-text">
                                            Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
        
                    <div class="tm-bottom-g-box  ">
                        <div class="uk-container uk-container-center">
                            <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
        
                                <div class="uk-width-1-1 uk-width-large-1-2">
                                    <div class="uk-panel">
                                        <div class="match-list-wrap foot">
                                            <div id="carusel-7" class="uk-slidenav-position" data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                                <div class="last-match-top">
                                                    <div class="last-match-title">Last match</div>
                                                    <div class="footer-slider-btn">
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                        <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <ul class="uk-slideshow">
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    England </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    Amsterdam </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    Cambridgehire </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    china </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    Cambridgehire </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    china </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    England </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    Amsterdam </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li aria-hidden="false">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    Cambridgehire </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    china </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    King </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    china </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    England </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    Amsterdam </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="" aria-hidden="true">
                                                        <div class="match-list-item alt foot">
                                                            <div class="wrapper">
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <div class="team-name">
                                                                    Cambridgehire </div>
                                                                <div class="versus">VS</div>
        
                                                                <div class="team-name">
                                                                    china </div>
                                                                <div class="logo">
                                                                    <a href="match-single.html">
                                                                        <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                                    </a>
                                                                </div>
                                                                <a class="read-more" href="match-single.html">Read More</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
        
        
        
        
                                        </div>
                                    </div>
                                </div>
        
                                <div class="uk-width-1-1 uk-width-large-1-2">
                                    <div  class="uk-panel">
                                        <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                            <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                                <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                                    <div class="acymailing_module_form">
                                                        <div class="mail-title">Newsletters</div>
                                                        <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div>
                                                        <div class="clear"></div>
                                                        <div class="space"></div>
                                                        <table class="acymailing_form">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="acyfield_email acy_requiredField">
                                                                        <span class="mail-wrap">
                                                                            <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" class="inputbox" name="user[email]" style="width:80%" value="Enter your email" title="Enter your email" type="text">
                                                                    </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
        
                                                                    <td class="acysubbuttons">
                                                                        <span class="submit-wrap">
                                                                            <span class="submit-wrapper">
                                                                                <input class="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
        
                    <footer id="tm-footer" class="tm-footer">
        
        
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="footer-wrap">
                                            <div class="foot-menu-wrap">
                                                <ul class="nav menu">
                                                    <li class="item-165"><a href="about.html">About</a>
                                                    </li>
                                                    <li class="item-166"><a href="players.html">Players</a>
                                                    </li>
                                                    <li class="item-167"><a href="match-list.html">Match</a>
                                                    </li>
                                                    <li class="item-168"><a href="results.html">Results</a>
                                                    </li>
                                                    <li class="item-169"><a href="news.html">News</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="copyrights">Copyright © 2015 <a href="/">Sportak Team</a>. All Rights Reserved.</div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
        
                </div>
        
                <div id="offcanvas" class="uk-offcanvas">
                    <div class="uk-offcanvas-bar">
                        <ul class="uk-nav uk-nav-offcanvas">
                            <li class="uk-parent uk-active"><a href="index.html">Home</a>
                                <ul class="uk-nav-sub">
                                    <li><a class="yellow-scheme" href="../yellow/index.html">Yellow Color Scheme</a>
                                    </li>
                                    <li><a class="blue-scheme" href="../blue/index.html">Blue Color Scheme</a>
                                    </li>
                                    <li><a class="red-scheme" href="../red/index.html">Red Color Scheme</a>
                                    </li>
                                    <li><a href="offline.html">Offline Page</a>
                                    </li>
                                    <li><a href="404.html">Error Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="uk-parent"><a href="#">Pages</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="players.html">Players</a>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="match-list.html">Match</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="results.html">Results</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="news.html">News</a>
                            </li>
                            <li><a href="category.html">Shop</a>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/uikit.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/SimpleCounter.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/grid.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/slider.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/slideshow.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/slideset.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/sticky.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/components/lightbox.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/theme.js"></script>

    {{-- <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/jquery-1.11.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    {{-- <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/price-range.js"></script>
    <script src="{{ env('APP_ASSET') }}assets/assets/js/jquery.passtrength.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/store.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/map-icons.js"></script>

    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/assets/js/jquery.elevatezoom.js"></script> --}}

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

    <script>
        $(() => {
            load_list_cart();

            $("#pwd").keypress(function (e) {
                if (e.which == 13) {
                    singIn()
                }
            });

        });

        new SimpleCounter("countdown4", 1447448400, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
  });

        function load_list_cart() {
            $.ajax({
                type: "post",
                url: "{{route('get_cart_list')}}",
                dataType: "json",
                success: (data) => {
                    console.log(data)
                    let path = "{{ env('APP_ASSET') }}assets/"
                    let len = data.cart_list.length
                    let str = '',
                        total = 0;
                    for (let i = 0; i < len; i++) {
                        str += '<li>';
                        str += '<a href="#" title="" class="cart-product-image"><img';
                        str += '             src="' + path + 'images/product_img/' + data.cart_list[i]
                            .pro_img + '" alt="Product"></a>';
                        str += '     <div class="text">';
                        str += '         <p class="product-name">' + data.cart_list[i].pro_name + '</p>';
                        str += '         <p class="product-price">' + data.cart_list[i]
                            .cart_qty + ' x ฿' + data.cart_list[i].pro_price + '</p>';
                        str += '     </div>';
                        str += '     <a href="#" onclick="delete_cart(' + data.cart_list[i].cart_id +
                            ')" class="delete-item">';
                        str += '         <i class="zmdi zmdi-close-circle-o"></i>';
                        str += '     </a>';
                        str += ' </li>';
                        total += parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i]
                            .cart_qty)
                    }
                    $('#list_cart').html(str)
                    $('#in_cart_label').html(len)
                    $('#total_price').html('<span>Total cost</span> ฿' + total.toFixed(2))
                },
                error: (error) => {
                    console.log(error)
                }
            });
        }

        function singIn() {

            if ($('#username').val() == '') {
                feed_error('Username is null !');
                return;
            }

            if ($('#pwd').val() == '') {
                feed_error('Password is null !');
                return;
            }
            let re_me = 0
            if ($('#remember_me').prop("checked") == true) {
                re_me = 1;
            } else {
                re_me = 0;
            }
            console.log(re_me)
            let data = {
                username: $('#username').val(),
                password: $('#pwd').val(),
                re_me: re_me
            }
            $.post("{{ url('/getuser') }}", data,
                (data, textStatus, jqXHR) => {
                    if (data.status === true) {
                        location.href = "{{ url('/') }}"
                    } else {
                        str = 'Username or password incorrect';
                        $('#pwd').val('')
                        feed_error(str);
                    }
                },
                "json"
            );
        }
        $('#re_pwdc').keyup(function (e) {
            $(this).passtrength({
                tooltip: true,
                textWeak: "Weak",
                textMedium: "Medium",
                textStrong: "Strong",
                textVeryStrong: "Very Strong",
                eyeImg: "{{ env('APP_ASSET') }}assets/assets/images/eye.svg",
                passwordToggle: false,
            });
        });

        $('#re_pwd').keyup(function (e) {
            let data = {
                username: $(this).val(),
            }
            $.post("{{ url('/check_username') }}", data,
                function (data, textStatus, jqXHR) {
                    console.log(data)
                    if (data.status == true) {
                        $('#re_pwd').removeClass('error_use');
                        $('#re_pwd').addClass('success_use');
                        $('#div_re_pwd').removeClass('has-error');
                        $('#div_re_pwd').addClass('has-success');
                        $('#help_re_pwd').html('')
                        $('#btn_register').prop("disabled", false);
                    } else {
                        $('#re_pwd').removeClass('success_use');
                        $('#re_pwd').addClass('error_use');
                        $('#div_re_pwd').removeClass('has-success');
                        $('#div_re_pwd').addClass('has-error');
                        $('#help_re_pwd').html('Username already!')
                        $('#btn_register').prop("disabled", true);
                    }
                },
                "json"
            );
        })

        $('#re_email').keyup(function (e) {
            let data = {
                email: $(this).val(),
            }
            $.post("{{ url('/check_email') }}", data,
                function (data, textStatus, jqXHR) {
                    console.log(data)
                    if (data.status == true) {
                        $('#re_email').removeClass('error_use');
                        $('#re_email').addClass('success_use');
                        $('#div_re_email').removeClass('has-error');
                        $('#div_re_email').addClass('has-success');
                        $('#help_re_email').html('')
                        $('#btn_register').prop("disabled", false);

                    } else {
                        $('#re_email').removeClass('success_use');
                        $('#re_email').addClass('error_use');
                        $('#div_re_email').removeClass('has-success');
                        $('#div_re_email').addClass('has-error');
                        $('#help_re_email').html('E-mail already!')
                        $('#btn_register').prop("disabled", true);
                    }
                },
                "json"
            );
        })

        function alert_s() {
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: 'Add product to cart success',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function register_user() {
            let data = {
                name: $('#re_username').val(),
                email: $('#re_email').val(),
                username: $('#re_pwd').val(),
                password: $('#re_pwdc').val(),
            }
            if (data.name === '') {
                feed_error_re('Name is null!')
                return;
            }

            if (data.email === '') {
                feed_error_re('E-mail is null!')
                return;
            }

            if (data.username === '') {
                feed_error_re('Username is null!')
                return;
            }

            if (data.password === '') {
                feed_error_re('Password is null!')
                return;
            }

            if (data.password.length < 8) {
                feed_error_re('Password min 8 !')
                return;
            }
            $.post("{{ url('/getregister') }}", data,
                (data, textStatus, jqXHR) => {
                    if (data.status === true) {
                        location.href = "{{ url('/') }}"
                    } else {
                        str = 'something went wrong';
                        // $('#pwd').val('')
                        feed_error_re(str);
                    }
                },
                "json"
            );
        }

        function feed_error(str) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: str,
            })

        }

        function feed_error_re(str) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: str,
            })

        }

        function delete_cart(id) {
            let data = {
                id: id
            }
            $.post("{{route('delete_cart')}}", data,
                (data, textStatus, jqXHR) => {
                    console.log(data)
                    load_list_cart()
                    get_data_cart_list()
                },
                "json"
            );
        }

        function swich_modal(data) {
            if (data === 0) {
                $('#sing_in').modal('toggle')
                setTimeout(() => {
                    $('#register_modal').modal('toggle')
                }, 500)
            } else {
                $('#register_modal').modal('toggle')
                setTimeout(() => {
                    $('#sing_in').modal('toggle')
                }, 500)
            }

        }

    </script>
    @yield('javascript')

</body>

</html>
