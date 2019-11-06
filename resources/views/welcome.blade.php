@extends('layouts.fontend')
@section('contents')

<section class="home-1-slideshow mv-wrap">
        <div id="home-1-slideshow" class="mv-caroufredsel">
            <ul class="mv-slider-wrapper">
                <li class="mv-slider-item"><img src="{{ env('APP_ASSET') }}assets/images/slideshow/slide_1920x1080.png" alt="slide"
                        class="mv-slider-img" />
                    <div class="mv-caption-style-1">
                        <div class="container">
                            <div class="caption-1-text-1">Best Sale</div>
                            <div class="caption-1-text-2">
                                <div class="mv-title-style-1"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_1.png" alt="icon"
                                        class="line-left" /><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_2.png" alt="icon"
                                        class="line-right" />the black phantom</div>
                            </div><a href="product-grid-3.html"
                                class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span
                                    class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                        class="btn-text">shop now</span></span></a>
                        </div>
                    </div>
                </li>
                <!-- .mv-slider-item-->

                <li class="mv-slider-item"><img src="{{ env('APP_ASSET') }}assets/images/slideshow/slide2_1920x1080.png" alt="slide"
                        class="mv-slider-img" />
                    <div class="mv-caption-style-1">
                        <div class="container">
                            <div class="caption-1-text-1">Best Sale</div>
                            <div class="caption-1-text-2">
                                <div class="mv-title-style-1"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_1.png" alt="icon"
                                        class="line-left" /><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_2.png" alt="icon"
                                        class="line-right" />the black phantom</div>
                            </div><a href="product-grid-3.html"
                                class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span
                                    class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                        class="btn-text">shop now</span></span></a>
                        </div>
                    </div>
                </li>
                <!-- .mv-slider-item-->

                <li class="mv-slider-item"><img src="{{ env('APP_ASSET') }}assets/images/slideshow/slide3_1920x1080.png" alt="slide"
                        class="mv-slider-img" />
                    <div class="mv-caption-style-1">
                        <div class="container">
                            <div class="caption-1-text-1">Best Sale</div>
                            <div class="caption-1-text-2">
                                <div class="mv-title-style-1"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_1.png" alt="icon"
                                        class="line-left" /><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_2.png" alt="icon"
                                        class="line-right" />the black phantom</div>
                            </div><a href="product-grid-3.html"
                                class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span
                                    class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                        class="btn-text">shop now</span></span></a>
                        </div>
                    </div>
                </li>
                <!-- .mv-slider-item-->
            </ul>

            <button id="home-1-slideshow-prev" type="button"
                class="mv-slider-control-btn prev mv-btn mv-btn-style-2"><span
                    class="icon fa fa-angle-left"></span></button>
            <button id="home-1-slideshow-next" type="button"
                class="mv-slider-control-btn next mv-btn mv-btn-style-2"><span
                    class="icon fa fa-angle-right"></span></button>
        </div>
    </section>
    <!-- .home-1-slideshow-->

    <section class="home-1-highlight mv-wrap">
        <div class="container">
            <div class="mv-block-style-1">
                <div class="row block-1-list">
                    <article class="col-xs-6 col-sm-4 item post">
                        <div class="item-inner mv-effect-translate-1">
                            <div class="content-thumb">
                                <div class="thumb-inner mv-effect-relative"><a href="product-detail.html"
                                        title="Caberg Riviera V2+ Italia Open Face Motorcycle Helmet"><img
                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                            class="mv-effect-item" /></a><a href="product-detail.html"
                                        title="Caberg Riviera V2+ Italia Open Face Motorcycle Helmet"
                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                            class="btn-inner"></span></a>

                                    <div class="content-message mv-message-style-1">
                                        <div class="message-inner"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-main">
                                <div class="content-name hidden-xs hidden-sm">
                                    <div class="name-inner mv-overflow-ellipsis">AGV Open Face</div>
                                </div>
                                <div class="content-text">
                                    <div class="content-price">$ 129.99</div>
                                    <div class="content-desc"><a href="product-detail.html"
                                            title="Caberg Riviera V2+ Italia Open Face Motorcycle Helmet"
                                            class="mv-overflow-ellipsis">Caberg Riviera V2+ Italia Open Face
                                            Motorcycle Helmet</a></div>
                                </div>
                            </div>

                            <div class="content-hover">
                                <div class="content-button mv-btn-group text-center">
                                    <div class="group-inner">
                                        <button type="button" title="Add To Wishlist"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                class="fa fa-heart-o"></i></button>
                                        <button type="button" title="Add To Cart"
                                            class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart"><span
                                                class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                                    class="btn-text">Add to cart</span></span></button>
                                        <button type="button" title="Compare"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                class="fa fa-signal"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="col-xs-6 col-sm-4 item post">
                        <div class="item-inner mv-effect-translate-1">
                            <div class="content-thumb">
                                <div class="thumb-inner mv-effect-relative"><a href="product-detail.html"
                                        title="Alpinestars GP Plus R Leather Motorcycle Jacket"><img
                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                            class="mv-effect-item" /></a><a href="product-detail.html"
                                        title="Alpinestars GP Plus R Leather Motorcycle Jacket"
                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                            class="btn-inner"></span></a>

                                    <div class="content-message mv-message-style-1">
                                        <div class="message-inner"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-main">
                                <div class="content-name hidden-xs hidden-sm">
                                    <div class="name-inner mv-overflow-ellipsis">Alpinestars</div>
                                </div>
                                <div class="content-text">
                                    <div class="content-price">$ 250.00</div>
                                    <div class="content-desc"><a href="product-detail.html"
                                            title="Alpinestars GP Plus R Leather Motorcycle Jacket"
                                            class="mv-overflow-ellipsis">Alpinestars GP Plus R Leather Motorcycle
                                            Jacket</a></div>
                                </div>
                            </div>

                            <div class="content-hover">
                                <div class="content-button mv-btn-group text-center">
                                    <div class="group-inner">
                                        <button type="button" title="Add To Wishlist"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                class="fa fa-heart-o"></i></button>
                                        <button type="button" title="Add To Cart"
                                            class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart"><span
                                                class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                                    class="btn-text">Add to cart</span></span></button>
                                        <button type="button" title="Compare"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                class="fa fa-signal"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="col-xs-6 col-sm-4 item post">
                        <div class="item-inner mv-effect-translate-1">
                            <div class="content-thumb">
                                <div class="thumb-inner mv-effect-relative"><a href="product-detail.html"
                                        title="Rtd Tractech Evo Blue Moto Sports Leather Gloves"><img
                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                            class="mv-effect-item" /></a><a href="product-detail.html"
                                        title="Rtd Tractech Evo Blue Moto Sports Leather Gloves"
                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                            class="btn-inner"></span></a>

                                    <div class="content-message mv-message-style-1">
                                        <div class="message-inner"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-main">
                                <div class="content-name hidden-xs hidden-sm">
                                    <div class="name-inner mv-overflow-ellipsis">Tractech Evo RACE</div>
                                </div>
                                <div class="content-text">
                                    <div class="content-price">$ 189.99</div>
                                    <div class="content-desc"><a href="product-detail.html"
                                            title="Rtd Tractech Evo Blue Moto Sports Leather Gloves"
                                            class="mv-overflow-ellipsis">Rtd Tractech Evo Blue Moto Sports Leather
                                            Gloves</a></div>
                                </div>
                            </div>

                            <div class="content-hover">
                                <div class="content-button mv-btn-group text-center">
                                    <div class="group-inner">
                                        <button type="button" title="Add To Wishlist"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                class="fa fa-heart-o"></i></button>
                                        <button type="button" title="Add To Cart"
                                            class="mv-btn mv-btn-style-1 responsive-btn-1-type-1 btn-add-to-cart"><span
                                                class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span
                                                    class="btn-text">Add to cart</span></span></button>
                                        <button type="button" title="Compare"
                                            class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                class="fa fa-signal"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- .mv-block-style-1-->
        </div>
    </section>
    <!-- .home-1-highlight-->

    <section class="home-1-featured-products mv-wrap">
        <div class="container">
            <div class="featured-title mv-title-style-2">
                <div class="title-2-inner"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_m.png" alt="icon"
                        class="icon image-live-view" /><span class="main">featured products</span><span
                        class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</span></div>
            </div>
            <!-- .featured-title-->

            <div class="featured-main mv-filter-style-1">
                <div class="filter-button mv-btn-group">
                    <div class="group-inner">
                        <button data-filter=".motor" class="mv-btn mv-btn-style-8 active">motor</button>
                        <button data-filter=".helmet" class="mv-btn mv-btn-style-8">helmet</button>
                        <button data-filter=".boots" class="mv-btn mv-btn-style-8">boots</button>
                        <button data-filter=".protection" class="mv-btn mv-btn-style-8">protection</button>
                        <button data-filter=".gear" class="mv-btn mv-btn-style-8">gear</button>
                        <button data-filter=".tires" class="mv-btn mv-btn-style-8">tires</button>
                    </div>
                </div>
                <!-- .filter-button-->

                <div class="row filter-list-warpper">
                    <div class="filter-list mv-block-style-2">
                        <div class="block-2-list">
                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item motor">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item motor">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"
                                                    class="mv-overflow-ellipsis">Rev'it Cyclone Waterproof Jacket -
                                                    Neon Yellow</a></div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item motor">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item motor">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item helmet">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item boots">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item boots">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item boots">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item boots">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item boots">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item protection">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item protection">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item gear">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- .post-->

                            <article class="col-xs-6 col-sm-4 col-md-3 item post filter-item tires">
                                <div class="item-inner mv-effect-translate-1">
                                    <div class="content-default">
                                        <div class="content-thumb">
                                            <div class="thumb-inner mv-effect-relative"><a
                                                    href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"><img
                                                        src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                        class="mv-effect-item" /></a><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                        class="btn-inner"></span></a>

                                                <div class="content-message mv-message-style-1">
                                                    <div class="message-inner"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-rate="true" data-score="5.0"
                                            class="content-rate mv-rate text-center">
                                            <div class="rate-inner mv-f-14 text-left">
                                                <div class="stars-wrapper empty-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                                <div class="stars-wrapper filled-stars"><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span
                                                        class="item-rate"></span><span class="item-rate"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-sale-off mv-label-style-3 label-primary">
                                            <div class="label-inner">-25%</div>
                                        </div>
                                    </div>

                                    <div class="content-main">
                                        <div class="content-text">
                                            <div class="content-price"><span class="new-price">$ 128.24</span></div>
                                            <div class="content-desc"><a href="product-detail.html"
                                                    title="RST Full Zipped Sweatshirt"
                                                    class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-hover">
                                        <div class="content-button mv-btn-group text-center">
                                            <div class="group-inner">
                                                <button type="button" title="Add To Wishlist"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button" title="Compare"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                        class="fa fa-signal"></i></button>
                                                <button type="button" title="Add To Cart"
                                                    class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                        class="fa fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- .filter-list-wrapper-->
            </div>
            <!-- .featured-main-->
        </div>
    </section>
    <!-- .home-1-featured-products-->

    <section class="home-1-shop hidden-xs hidden-sm mv-wrap">
        <div class="container">
            <div class="block-list-1">
                <div class="mv-block-style-3"><a href="#"
                        class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-2 btn-shop-now hidden-xs hidden-sm"><span
                            class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop
                                now</span></span></a>
                    <div class="block-3-list">
                        <div class="item">
                            <div class="block-3-title">
                                <div class="main"><a href="product-detail.html"
                                        title="Alpinestars Bionic Plus">Alpinestars Bionic Plus</a></div>
                                <div class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh</div>
                            </div>
                            <div class="block-3-thumb"><a href="product-detail.html"
                                    title="Alpinestars Bionic Plus"><img src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png"
                                        alt="demo" class="block-3-thumb-img" /></a></div>
                        </div>

                        <div class="item">
                            <div class="block-3-thumb"><a href="product-detail.html"
                                    title="Alpinestars Bionic Plus"><img src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png"
                                        alt="demo" class="block-3-thumb-img hidden-xs hidden-sm" /></a></div>
                            <div class="block-3-title">
                                <div class="main"><a href="product-detail.html"
                                        title="Alpinestars Bionic Plus">Alpinestars Roving Backpack</a></div>
                                <div class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                </div>
                            </div>
                            <div class="block-3-thumb"><a href="product-detail.html"
                                    title="Alpinestars Bionic Plus"><img src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png"
                                        alt="demo" class="block-3-thumb-img hidden-md hidden-lg" /></a></div>
                        </div>
                    </div>
                </div>
                <!-- .mv-block-style-3-->
            </div>
        </div>
    </section>
    <!-- .home-1-shop-->

    <section class="home-1-latest-blog mv-wrap">
        <div class="container">
            <div class="latest-blog-title mv-title-style-2">
                <div class="title-2-inner"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_m.png" alt="icon"
                        class="icon image-live-view" /><span class="main">Latest blogs</span><span class="sub">Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat</span></div>
            </div>
            <!-- .latest-blog-title-->

            <div class="latest-blog-main">
                <div class="latest-blog-list">
                    <div class="mv-block-style-4">
                        <div class="row block-4-list">
                            <article class="col-xs-6 col-sm-12 item post">
                                <div class="item-inner mv-effect-zoom-in-out">
                                    <div class="block-4-thumb">
                                        <div class="row">
                                            <div class="col-sm-6"><span class="block-4-thumb-inner"><a
                                                        href="blog-detail.html"
                                                        title="Lamcorper suscipit lobortis nisl"><span
                                                            style="background-image: url(images/demo/demo_800x300.png);"
                                                            class="block-4-thumb-img"></span></a><span
                                                        class="polygon hidden-xs"></span><span
                                                        onclick="$(this).remove()"
                                                        class="block-4-date mv-date-style-1"><span
                                                            class="day">29</span><span
                                                            class="month">sep</span></span></span></div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </div>
                                    <!-- .block-4-thumb-->

                                    <div class="block-4-main">
                                        <div class="block-4-main-inner"><a href="blog-detail.html"
                                                title="Lamcorper suscipit lobortis nisl"
                                                class="block-4-title mv-overflow-ellipsis">Lamcorper suscipit
                                                lobortis nisl</a>
                                            <div class="block-4-content">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                                quis nostrud exerci tation</div>
                                            <div class="block-4-read-more"><a href="#"
                                                    class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span
                                                        class="btn-inner"><i
                                                            class="btn-icon fa fa-angle-right"></i><span
                                                            class="btn-text">read more</span></span></a></div>
                                        </div>
                                    </div>
                                    <!-- .block-4-main-->
                                </div>
                            </article>
                            <!-- .item-->

                            <article class="col-xs-6 col-sm-12 item post">
                                <div class="item-inner mv-effect-zoom-in-out">
                                    <div class="block-4-thumb">
                                        <div class="row">
                                            <div class="col-sm-6"><span class="block-4-thumb-inner"><a
                                                        href="blog-detail.html"
                                                        title="Lamcorper suscipit lobortis nisl"><span
                                                            style="background-image: url(images/demo/demo_800x300.png);"
                                                            class="block-4-thumb-img"></span></a><span
                                                        class="polygon hidden-xs"></span><span
                                                        onclick="$(this).remove()"
                                                        class="block-4-date mv-date-style-1"><span
                                                            class="day">29</span><span
                                                            class="month">sep</span></span></span></div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </div>
                                    <!-- .block-4-thumb-->

                                    <div class="block-4-main">
                                        <div class="block-4-main-inner"><a href="blog-detail.html"
                                                title="Duis autem vel eum iriure dolor in hendrerit"
                                                class="block-4-title mv-overflow-ellipsis">Duis autem vel eum iriure
                                                dolor in hendrerit</a>
                                            <div class="block-4-content">Lorem ipsum dolor sit amet, consectetuer
                                                adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                                quis nostrud exerci tation</div>
                                            <div class="block-4-read-more"><a href="#"
                                                    class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span
                                                        class="btn-inner"><i
                                                            class="btn-icon fa fa-angle-right"></i><span
                                                            class="btn-text">read more</span></span></a></div>
                                        </div>
                                    </div>
                                    <!-- .block-4-main-->
                                </div>
                            </article>
                            <!-- .item-->
                        </div>
                    </div>
                    <!-- .mv-block-style-4-->
                </div>
            </div>
            <!-- .latest-blog-main-->
        </div>
    </section>
    <!-- .home-1-latest-blog-->

    <section class="home-1-deals-last-week mv-wrap">
        <div data-image-src="{{ env('APP_ASSET') }}assets/images/background/demo_bg_1920x1680.png" class="deals-last-week-bg mv-parallax">
            <div class="container">
                <div class="deals-last-week-title mv-title-style-2 color-white">
                    <div class="title-2-inner"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_m_2.png" alt="icon"
                            class="icon image-live-view" /><span class="main">deals last week</span><span
                            class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod <br />tincidunt ut laoreet dolore magna aliquam erat volutpat</span></div>
                </div>
                <!-- .deals-last-week-title-->

                <div class="deals-last-week-main">
                    <div class="deals-last-week-list">
                        <div class="mv-block-style-2">
                            <div class="row block-2-list">
                                <article class="col-xs-6 col-md-3 item post item-bg-white">
                                    <div class="item-inner mv-effect-translate-1">
                                        <div class="content-default">
                                            <div class="content-thumb">
                                                <div class="thumb-inner mv-effect-relative"><a
                                                        href="product-detail.html"
                                                        title="Alpinestars Techstar Motocross Kit Combo"><img
                                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                            class="mv-effect-item" /></a><a
                                                        href="product-detail.html"
                                                        title="Alpinestars Techstar Motocross Kit Combo"
                                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                            class="btn-inner"></span></a>

                                                    <div class="content-message mv-message-style-1">
                                                        <div class="message-inner"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div data-rate="true" data-score="5.0"
                                                class="content-rate mv-rate text-center">
                                                <div class="rate-inner mv-f-14 text-left">
                                                    <div class="stars-wrapper empty-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                    <div class="stars-wrapper filled-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-main">
                                            <div class="content-text">
                                                <div class="content-price"><span class="new-price">$ 128.24</span>
                                                </div>
                                                <div class="content-desc"><a href="product-detail.html"
                                                        title="Alpinestars Techstar Motocross Kit Combo"
                                                        class="mv-overflow-ellipsis">Alpinestars Techstar Motocross
                                                        Kit Combo</a></div>
                                            </div>
                                        </div>

                                        <div class="content-hover">
                                            <div class="content-button mv-btn-group text-center">
                                                <div class="group-inner">
                                                    <button type="button" title="Add To Wishlist"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                            class="fa fa-heart-o"></i></button>
                                                    <button type="button" title="Compare"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                            class="fa fa-signal"></i></button>
                                                    <button type="button" title="Add To Cart"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                            class="fa fa-cart-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- .post-->

                                <article class="col-xs-6 col-md-3 item post item-bg-white">
                                    <div class="item-inner mv-effect-translate-1">
                                        <div class="content-default">
                                            <div class="content-thumb">
                                                <div class="thumb-inner mv-effect-relative"><a
                                                        href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"><img
                                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                            class="mv-effect-item" /></a><a
                                                        href="product-detail.html" title="Spada Enforcer WP Glove"
                                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                            class="btn-inner"></span></a>

                                                    <div class="content-message mv-message-style-1">
                                                        <div class="message-inner"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div data-rate="true" data-score="5.0"
                                                class="content-rate mv-rate text-center">
                                                <div class="rate-inner mv-f-14 text-left">
                                                    <div class="stars-wrapper empty-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                    <div class="stars-wrapper filled-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-sale-off mv-label-style-3 label-dark">
                                                <div class="label-inner">-25%</div>
                                            </div>
                                        </div>

                                        <div class="content-main">
                                            <div class="content-text">
                                                <div class="content-price"><span class="new-price">$ 128.24</span>
                                                </div>
                                                <div class="content-desc"><a href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"
                                                        class="mv-overflow-ellipsis">Spada Enforcer WP Glove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-hover">
                                            <div class="content-button mv-btn-group text-center">
                                                <div class="group-inner">
                                                    <button type="button" title="Add To Wishlist"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                            class="fa fa-heart-o"></i></button>
                                                    <button type="button" title="Compare"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                            class="fa fa-signal"></i></button>
                                                    <button type="button" title="Add To Cart"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                            class="fa fa-cart-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- .post-->

                                <article class="col-xs-6 col-md-3 item post item-bg-white">
                                    <div class="item-inner mv-effect-translate-1">
                                        <div class="content-default">
                                            <div class="content-thumb">
                                                <div class="thumb-inner mv-effect-relative"><a
                                                        href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"><img
                                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                            class="mv-effect-item" /></a><a
                                                        href="product-detail.html" title="Spada Enforcer WP Glove"
                                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                            class="btn-inner"></span></a>

                                                    <div class="content-message mv-message-style-1">
                                                        <div class="message-inner"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div data-rate="true" data-score="5.0"
                                                class="content-rate mv-rate text-center">
                                                <div class="rate-inner mv-f-14 text-left">
                                                    <div class="stars-wrapper empty-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                    <div class="stars-wrapper filled-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-main">
                                            <div class="content-text">
                                                <div class="content-price"><span class="new-price">$ 128.24</span>
                                                </div>
                                                <div class="content-desc"><a href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"
                                                        class="mv-overflow-ellipsis">Spada Enforcer WP Glove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-hover">
                                            <div class="content-button mv-btn-group text-center">
                                                <div class="group-inner">
                                                    <button type="button" title="Add To Wishlist"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                            class="fa fa-heart-o"></i></button>
                                                    <button type="button" title="Compare"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                            class="fa fa-signal"></i></button>
                                                    <button type="button" title="Add To Cart"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                            class="fa fa-cart-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- .post-->

                                <article class="col-xs-6 col-md-3 item post item-bg-white">
                                    <div class="item-inner mv-effect-translate-1">
                                        <div class="content-default">
                                            <div class="content-thumb">
                                                <div class="thumb-inner mv-effect-relative"><a
                                                        href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"><img
                                                            src="{{ env('APP_ASSET') }}assets/images/demo/demo_300x400.png" alt="demo"
                                                            class="mv-effect-item" /></a><a
                                                        href="product-detail.html" title="Spada Enforcer WP Glove"
                                                        class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                                            class="btn-inner"></span></a>

                                                    <div class="content-message mv-message-style-1">
                                                        <div class="message-inner"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div data-rate="true" data-score="5.0"
                                                class="content-rate mv-rate text-center">
                                                <div class="rate-inner mv-f-14 text-left">
                                                    <div class="stars-wrapper empty-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                    <div class="stars-wrapper filled-stars"><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span
                                                            class="item-rate"></span><span class="item-rate"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-sale-off mv-label-style-3 label-primary">
                                                <div class="label-inner">-25%</div>
                                            </div>
                                        </div>

                                        <div class="content-main">
                                            <div class="content-text">
                                                <div class="content-price"><span class="new-price">$ 128.24</span>
                                                </div>
                                                <div class="content-desc"><a href="product-detail.html"
                                                        title="Spada Enforcer WP Glove"
                                                        class="mv-overflow-ellipsis">Spada Enforcer WP Glove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content-hover">
                                            <div class="content-button mv-btn-group text-center">
                                                <div class="group-inner">
                                                    <button type="button" title="Add To Wishlist"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                            class="fa fa-heart-o"></i></button>
                                                    <button type="button" title="Compare"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i
                                                            class="fa fa-signal"></i></button>
                                                    <button type="button" title="Add To Cart"
                                                        class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i
                                                            class="fa fa-cart-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- .post-->
                            </div>
                        </div>
                        <!-- .mv-block-style-2-->
                    </div>
                </div>
                <!-- .deals-last-week-main-->
            </div>
        </div>
    </section>
    <!-- .home-1-deals-last-week-->

    <section class="home-1-testimonial mv-wrap">
        <div class="container">
            <div class="testimonial-title mv-title-style-2">
                <div class="title-2-inner"><img src="{{ env('APP_ASSET') }}assets/images/icon/icon_m.png" alt="icon"
                        class="icon image-live-view" /><span class="main">Testimonial</span><span class="sub">Lorem
                        ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat</span></div>
            </div>
            <!-- .testimonial-title-->

            <div class="testimonial-main">
                <div class="mv-block-style-5">
                    <div id="home-1-testimonial-slider" class="mv-slick-slide">
                        <div class="row">
                            <div class="col-md-6 col-main">
                                <div class="col-inner">
                                    <div class="slider gallery-main">

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner">
                                                <div class="block-5-quote mv-quote-style-1">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell quote-icon"><i
                                                                class="icon fa fa-quote-left"></i></div>
                                                        <div class="mv-dp-table-cell quote-main">
                                                            <div class="quote-content">Duis autem vel eum iriure
                                                                dolor in hendrerit in vulputate velit esse molestie
                                                                consequat, vel illum dolore eu feugiat nulla
                                                                facilisis at vero eros et accumsan et iusto odio
                                                                dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.
                                                                Nam liber tempor cum soluta nobis eleifend option
                                                                congue nihil imperdiet doming id quod mazim placerat
                                                                facer possim assum</div>
                                                            <div class="quote-line"></div>

                                                            <div class="block-5-profile mv-block-style-6">
                                                                <div class="mv-dp-table">
                                                                    <div class="mv-dp-table-cell block-6-thumb"><a
                                                                            href="#"><span
                                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                                class="block-6-thumb-img"></span></a>
                                                                    </div>
                                                                    <div class="mv-dp-table-cell block-6-main">
                                                                        <div class="block-6-name"> <a
                                                                                href="#">Robert william</a></div>
                                                                        <div class="block-6-office">MANAGER MOTOR
                                                                            VERHIKLE<span class="sub">Gold Medalist,
                                                                                Olympics 2015</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .block-5-profile-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner">
                                                <div class="block-5-quote mv-quote-style-1">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell quote-icon"><i
                                                                class="icon fa fa-quote-left"></i></div>
                                                        <div class="mv-dp-table-cell quote-main">
                                                            <div class="quote-content">Duis autem vel eum iriure
                                                                dolor in hendrerit in vulputate velit esse molestie
                                                                consequat, vel illum dolore eu feugiat nulla
                                                                facilisis at vero eros et accumsan et iusto odio
                                                                dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.
                                                                Nam liber tempor cum soluta nobis eleifend option
                                                                congue nihil imperdiet doming id quod mazim placerat
                                                                facer possim assum</div>
                                                            <div class="quote-line"></div>

                                                            <div class="block-5-profile mv-block-style-6">
                                                                <div class="mv-dp-table">
                                                                    <div class="mv-dp-table-cell block-6-thumb"><a
                                                                            href="#"><span
                                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                                class="block-6-thumb-img"></span></a>
                                                                    </div>
                                                                    <div class="mv-dp-table-cell block-6-main">
                                                                        <div class="block-6-name"> <a
                                                                                href="#">Robert william</a></div>
                                                                        <div class="block-6-office">MANAGER MOTOR
                                                                            VERHIKLE<span class="sub">Gold Medalist,
                                                                                Olympics 2015</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .block-5-profile-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner">
                                                <div class="block-5-quote mv-quote-style-1">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell quote-icon"><i
                                                                class="icon fa fa-quote-left"></i></div>
                                                        <div class="mv-dp-table-cell quote-main">
                                                            <div class="quote-content">Duis autem vel eum iriure
                                                                dolor in hendrerit in vulputate velit esse molestie
                                                                consequat, vel illum dolore eu feugiat nulla
                                                                facilisis at vero eros et accumsan et iusto odio
                                                                dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.
                                                                Nam liber tempor cum soluta nobis eleifend option
                                                                congue nihil imperdiet doming id quod mazim placerat
                                                                facer possim assum</div>
                                                            <div class="quote-line"></div>

                                                            <div class="block-5-profile mv-block-style-6">
                                                                <div class="mv-dp-table">
                                                                    <div class="mv-dp-table-cell block-6-thumb"><a
                                                                            href="#"><span
                                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                                class="block-6-thumb-img"></span></a>
                                                                    </div>
                                                                    <div class="mv-dp-table-cell block-6-main">
                                                                        <div class="block-6-name"> <a
                                                                                href="#">Robert william</a></div>
                                                                        <div class="block-6-office">MANAGER MOTOR
                                                                            VERHIKLE<span class="sub">Gold Medalist,
                                                                                Olympics 2015</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .block-5-profile-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner">
                                                <div class="block-5-quote mv-quote-style-1">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell quote-icon"><i
                                                                class="icon fa fa-quote-left"></i></div>
                                                        <div class="mv-dp-table-cell quote-main">
                                                            <div class="quote-content">Duis autem vel eum iriure
                                                                dolor in hendrerit in vulputate velit esse molestie
                                                                consequat, vel illum dolore eu feugiat nulla
                                                                facilisis at vero eros et accumsan et iusto odio
                                                                dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.
                                                                Nam liber tempor cum soluta nobis eleifend option
                                                                congue nihil imperdiet doming id quod mazim placerat
                                                                facer possim assum</div>
                                                            <div class="quote-line"></div>

                                                            <div class="block-5-profile mv-block-style-6">
                                                                <div class="mv-dp-table">
                                                                    <div class="mv-dp-table-cell block-6-thumb"><a
                                                                            href="#"><span
                                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                                class="block-6-thumb-img"></span></a>
                                                                    </div>
                                                                    <div class="mv-dp-table-cell block-6-main">
                                                                        <div class="block-6-name"> <a
                                                                                href="#">Robert william</a></div>
                                                                        <div class="block-6-office">MANAGER MOTOR
                                                                            VERHIKLE<span class="sub">Gold Medalist,
                                                                                Olympics 2015</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .block-5-profile-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner">
                                                <div class="block-5-quote mv-quote-style-1">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell quote-icon"><i
                                                                class="icon fa fa-quote-left"></i></div>
                                                        <div class="mv-dp-table-cell quote-main">
                                                            <div class="quote-content">Duis autem vel eum iriure
                                                                dolor in hendrerit in vulputate velit esse molestie
                                                                consequat, vel illum dolore eu feugiat nulla
                                                                facilisis at vero eros et accumsan et iusto odio
                                                                dignissim qui blandit praesent luptatum zzril
                                                                delenit augue duis dolore te feugait nulla facilisi.
                                                                Nam liber tempor cum soluta nobis eleifend option
                                                                congue nihil imperdiet doming id quod mazim placerat
                                                                facer possim assum</div>
                                                            <div class="quote-line"></div>

                                                            <div class="block-5-profile mv-block-style-6">
                                                                <div class="mv-dp-table">
                                                                    <div class="mv-dp-table-cell block-6-thumb"><a
                                                                            href="#"><span
                                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                                class="block-6-thumb-img"></span></a>
                                                                    </div>
                                                                    <div class="mv-dp-table-cell block-6-main">
                                                                        <div class="block-6-name"> <a
                                                                                href="#">Robert william</a></div>
                                                                        <div class="block-6-office">MANAGER MOTOR
                                                                            VERHIKLE<span class="sub">Gold Medalist,
                                                                                Olympics 2015</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .block-5-profile-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->
                                    </div>

                                    <div class="slick-slide-control mv-btn-group">
                                        <div class="group-inner"></div>
                                    </div>
                                </div>
                                <!-- .gallery-main-->
                            </div>

                            <div class="col-md-6 col-thumbs hidden-xs hidden-sm">
                                <div class="col-inner">
                                    <div class="slider gallery-thumbs">
                                        <div class="slick-slide">
                                            <div class="slick-slide-inner mv-block-style-7">
                                                <div style="background-image: url(images/demo/demo_800x300.png)"
                                                    class="block-7-bg"></div>
                                                <div class="block-7-polygon"><span class="polygon-inner"></span>
                                                </div>
                                                <div class="block-7-main">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-7-thumb"><span
                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                class="block-7-thumb-img"></span></div>
                                                        <div class="mv-dp-table-cell block-7-detail">
                                                            <div class="block-7-detail-inner">
                                                                <div class="block-7-name">Robert william</div>
                                                                <div class="block-7-office">MANAGER MOTOR
                                                                    VERHIKLE<span class="sub">Gold Medalist,
                                                                        Olympics 2015</span></div>
                                                                <div class="block-7-icon-quote"><i
                                                                        class="icon fa fa-quote-left"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner mv-block-style-7">
                                                <div style="background-image: url(images/demo/demo_800x300.png)"
                                                    class="block-7-bg"></div>
                                                <div class="block-7-polygon"><span class="polygon-inner"></span>
                                                </div>
                                                <div class="block-7-main">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-7-thumb"><span
                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                class="block-7-thumb-img"></span></div>
                                                        <div class="mv-dp-table-cell block-7-detail">
                                                            <div class="block-7-detail-inner">
                                                                <div class="block-7-name">Robert william</div>
                                                                <div class="block-7-office">MANAGER MOTOR
                                                                    VERHIKLE<span class="sub">Gold Medalist,
                                                                        Olympics 2015</span></div>
                                                                <div class="block-7-icon-quote"><i
                                                                        class="icon fa fa-quote-left"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner mv-block-style-7">
                                                <div style="background-image: url(images/demo/demo_800x300.png)"
                                                    class="block-7-bg"></div>
                                                <div class="block-7-polygon"><span class="polygon-inner"></span>
                                                </div>
                                                <div class="block-7-main">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-7-thumb"><span
                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                class="block-7-thumb-img"></span></div>
                                                        <div class="mv-dp-table-cell block-7-detail">
                                                            <div class="block-7-detail-inner">
                                                                <div class="block-7-name">Robert william</div>
                                                                <div class="block-7-office">MANAGER MOTOR
                                                                    VERHIKLE<span class="sub">Gold Medalist,
                                                                        Olympics 2015</span></div>
                                                                <div class="block-7-icon-quote"><i
                                                                        class="icon fa fa-quote-left"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner mv-block-style-7">
                                                <div style="background-image: url(images/demo/demo_800x300.png)"
                                                    class="block-7-bg"></div>
                                                <div class="block-7-polygon"><span class="polygon-inner"></span>
                                                </div>
                                                <div class="block-7-main">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-7-thumb"><span
                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                class="block-7-thumb-img"></span></div>
                                                        <div class="mv-dp-table-cell block-7-detail">
                                                            <div class="block-7-detail-inner">
                                                                <div class="block-7-name">Robert william</div>
                                                                <div class="block-7-office">MANAGER MOTOR
                                                                    VERHIKLE<span class="sub">Gold Medalist,
                                                                        Olympics 2015</span></div>
                                                                <div class="block-7-icon-quote"><i
                                                                        class="icon fa fa-quote-left"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->

                                        <div class="slick-slide">
                                            <div class="slick-slide-inner mv-block-style-7">
                                                <div style="background-image: url(images/demo/demo_800x300.png)"
                                                    class="block-7-bg"></div>
                                                <div class="block-7-polygon"><span class="polygon-inner"></span>
                                                </div>
                                                <div class="block-7-main">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-7-thumb"><span
                                                                style="background-image: url(images/avatar/avatar_100x100.png);"
                                                                class="block-7-thumb-img"></span></div>
                                                        <div class="mv-dp-table-cell block-7-detail">
                                                            <div class="block-7-detail-inner">
                                                                <div class="block-7-name">Robert william</div>
                                                                <div class="block-7-office">MANAGER MOTOR
                                                                    VERHIKLE<span class="sub">Gold Medalist,
                                                                        Olympics 2015</span></div>
                                                                <div class="block-7-icon-quote"><i
                                                                        class="icon fa fa-quote-left"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .slick-slide-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .gallery-thumbs-->
                    </div>
                    <!-- #home-1-testimonial-slider-->
                </div>
                <!-- .mv-block-style-5-->
            </div>
            <!-- .testimonial-main-->
        </div>
    </section>
    <!-- .home-1-testimonial-->

    <section class="main-newsletter mv-newsletter-style-2 mv-wrap">
        <div class="container">
            <form method="GET" class="form-newsletter mv-form-horizontal">
                <div class="mv-form-group">
                    <label
                        class="col-xs-12 col-sm-3 hidden-xs mv-label text-right text-uppercase">Newsletter</label>
                    <div class="col-xs-12 col-sm-9 mv-field">
                        <div class="mv-inputbox-icon right">
                            <input type="text" name="test138" data-mv-placeholder="Subscribe your email here"
                                placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-1" />
                            <button type="button" class="mv-btn mv-btn-style-4 icon"><i
                                    class="btn-icon fa fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- .mv-newsletter-style-2-->

@endsection


@section('javascript')
    <script>



        $(document).ready(function () {
            $('#order').change(function (e) {
                e.preventDefault();
                location.href="{{route('pro_all')}}?order="+$('#order').val();
            });

    let min = "{{isset($_GET['filter_min'])&&$_GET['filter_min']!=''?$_GET['filter_min']:0}}";
    let max = "{{isset($_GET['filter_max'])&&$_GET['filter_max']!=''?$_GET['filter_max']:9999}}";
    var $sliderRange = $("#slider-range"),
    $sliderAmount = $("#amount");
    $sliderRange.slider({
        range: true,
        min: 0,
        max: 9999,
        values: [min, max],
        slide: function(event, ui) {
            $sliderAmount.val("฿" + ui.values[0] + " - ฿" + ui.values[1]);
        }
    });
    $sliderAmount.val("฿" + $sliderRange.slider("values", 0) + " - ฿" + $sliderRange.slider("values", 1));

        });

        $( "#slider-range" ).on( "slidechange", function( event, ui ) {
            location.href="{{route('pro_all')}}?order="+$('#order').val()+"&&filter_min="+ui.values[0]+'&filter_max='+ui.values[1];
        } );


    function add_item_to_cart(pro_id){
        let data = {
            pro_id:pro_id
        }
        $.post("{{route('add_item_to_cart')}}", data,
            function (data, textStatus, jqXHR) {
                console.log(data)
                load_list_cart()
                alert_s()
            },
            "json"
        );
    }

    function set_secion(pro_id){
        let data = {
            pro_id:pro_id
        }
        $.post("{{route('set_session')}}", data,
            function (data, textStatus, jqXHR) {
                console.log(data)
            },
            "json"
        );
    }

    </script>
@endsection
