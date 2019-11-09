@extends('layouts.fontend')
{{-- @extends('layouts.master') --}}
@section('contents')
<div data-image-src="{{ env('APP_ASSET') }}images/background/demo_bg_1920x1680.png"
    class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
    <div class="page-name mv-caption-style-6">
        <div class="container">
            <div class="mv-title-style-9"><span class="main">product 5 columns</span><img
                    src="{{ env('APP_ASSET') }}images/icon/icon_line_polygon_line.png" alt="icon" class="line"></div>
        </div>
    </div>
</div>
<section class="main-breadcrumb mv-wrap">
    <div class="mv-breadcrumb-style-1">
        <div class="container">
            <ul class="breadcrumb-1-list">
                <li><a href="home.html"><i class="fa fa-home"></i></a></li>
                <li><a href="product-grid-3.html">Product</a></li>
                <li><a>Product 5 columns fullwidth</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="mv-main-body product-grid-3-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row mv-content-sidebar">
            <div class="mv-c-s-content col-xs-12 col-md-8 col-lg-9">
              <div class="row mv-list-product-wrapper mv-block-style-9">
                <div class="block-9-list mv-list-product">
                        @foreach ($products as $product)
                  <article class="col-xs-6 col-sm-4 col-md-6 col-lg-4 item item-product-grid-3 post">
                    <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                      <div style="background-color: #fff;" class="content-thumb">
                        <div class="thumb-inner mv-effect-relative"><a href="{{route('get_one_product',['id'=>$product->pro_id])}}" title="{{$product->pro_name}}"><img src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="demo" class="mv-effect-item"></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                          <div class="content-message mv-message-style-1">
                            <div class="message-inner"></div>
                          </div>

                          <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                            {{-- <div class="label-2-inner">
                              <ul class="label-2-ul">
                                <li class="number">-25%</li>
                                <li class="text">sale</li>
                              </ul>
                            </div> --}}
                          </div>
                        </div>
                      </div>

                      <div class="content-default">
                        <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                          <div class="rate-inner mv-f-14">
                            <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                            <div class="stars-wrapper filled-stars" style="width: 100%;"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                          </div>
                        </div>

                        <div class="content-price"><span class="new-price">฿ {{$product->pro_price}}</span></div>
                        <div class="content-desc"><a href="#" class="mv-overflow-ellipsis">{{$product->pro_name}}</a></div>
                      </div>

                      <div class="content-hover">
                        <div class="content-button mv-btn-group text-center">
                          <div class="group-inner">
                            <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="mv-btn mv-btn-style-1 btn-1-h-40 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-signal"></i><span class="btn-text">compare</span></span></button>
                            @if(Session::has('user_id'))
                            <button type="button" onclick="add_item_to_cart({{$product->pro_id}})" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                            @else
                            <button type="button" data-toggle="modal" data-target="#popupNewsletter" onclick="set_secion({{$product->pro_id}})" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  @endforeach

                </div>
              </div>
              <div class="mv-pagination-wrapper">
                <div class="mv-pagination-style-1 has-count-post">
                  <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
                </div>
              </div>
            </div>

            <div class="mv-c-s-sidebar col-xs-12 col-md-4 col-lg-3 hidden-xs hidden-sm">
              <div class="mv-c-s-sidebar-inner">
                <div class="mv-aside mv-aside-search">
                  <div class="aside-title mv-title-style-11">search</div>
                  <div class="aside-body">
                    <form method="GET" class="form-aside-search">
                      <div class="mv-inputbox-icon right">
                        <input type="text" name="test138" class="mv-inputbox mv-inputbox-style-2">
                        <button type="submit" class="icon mv-btn mv-btn-style-4 fa fa-search"></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- .mv-aside-search-->

                <div class="mv-aside mv-aside-filter-by-price">
                  <div class="aside-title mv-title-style-11">filter by price</div>
                  <div class="aside-body">
                    <form method="GET" class="form-aside-filter-by-price">
                      <div class="mv-slider-range">
                        <div class="slider-range-wrapper mv-slider-range-style-1">
                          <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                        </div>
                        <div class="mv-dp-table align-middle">
                          <div class="mv-dp-table-cell view-values">Price: $<span class="min-value">10</span> - $<span class="max-value">5000</span></div>
                          <div class="mv-dp-table-cell filter-button">
                            <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-30">filter</button>
                          </div>
                        </div>
                      </div>
                    </form>

                    <nav class="filter-by-price-menu mv-menu-style-1">
                      <ul>
                        <li><a href="#" class="mv-icon-left-style-5">$10 - $50<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">$50 - $100<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">$100 - $500<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">$500 - $1000<span class="sub-text">&nbsp; (16)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">$1000 - $5000<span class="sub-text">&nbsp; (6)</span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-filter-by-price-->

                <div class="mv-aside mv-aside-product-type">
                  <div class="aside-title mv-title-style-11">product type</div>
                  <div class="aside-body">
                    <nav class="product-type-menu mv-menu-style-1">
                      <ul>
                        <li><a href="#" class="mv-icon-left-style-5">Full Face Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Flip Up Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Open Face Helmets<span class="sub-text">&nbsp; (38)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Adventure Helmets<span class="sub-text">&nbsp; (12)</span></a>
                          <ul class="sub-menu">
                            <li><a href="#" class="mv-icon-left-style-5">AGV Helmets<span class="sub-text">&nbsp; (3)</span></a></li>
                            <li><a href="#" class="mv-icon-left-style-5">Arai Helmets<span class="sub-text">&nbsp; (12)</span></a></li>
                            <li class="active"><a href="#" class="mv-icon-left-style-5">Bell Helmets<span class="sub-text">&nbsp; (8)</span></a></li>
                            <li><a href="#" class="mv-icon-left-style-5">BOX Helmets<span class="sub-text">&nbsp; (15)</span></a></li>
                          </ul>
                        </li>
                        <li><a href="#" class="mv-icon-left-style-5">Trousers<span class="sub-text">&nbsp; (19)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Dresses<span class="sub-text">&nbsp; (34)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Shoes<span class="sub-text">&nbsp; (22)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Accessories<span class="sub-text">&nbsp; (17)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Sale<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5"> <strong>View More</strong><span class="sub-text">&nbsp; (50) &nbsp;</span><i class="fa fa-caret-down"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-product-type-->

                <div class="mv-aside mv-aside-filter-by-size">
                  <div class="aside-title mv-title-style-11">filter by</div>
                  <div class="aside-body">
                    <nav class="filter-by-price-menu mv-menu-style-1">
                      <ul>
                        <li><a href="#" class="mv-icon-left-style-5">Extra Large</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Extra Small</a></li>
                        <li class="active"><a href="#" class="mv-icon-left-style-5">Large</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Medium</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">One Size Fits All</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Small</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Taille Unique</a></li>
                        <li><a href="#" class="mv-icon-left-style-5">Sale</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-filter-by-size-->

                <div class="mv-aside mv-aside-size">
                  <div class="aside-title mv-title-style-11">size</div>
                  <div class="aside-body">
                    <nav class="size-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-21">XXL</a><a href="#" class="mv-btn mv-btn-style-21 active">XL</a><a href="#" class="mv-btn mv-btn-style-21">L</a><a href="#" class="mv-btn mv-btn-style-21">M</a><a href="#" class="mv-btn mv-btn-style-21">S</a></div>
                      </div>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-size-->

                <div class="mv-aside mv-aside-color">
                  <div class="aside-title mv-title-style-11">color</div>
                  <div class="aside-body">
                    <div class="color-list mv-list-inline-style-1 space-10">
                      <ul class="list-inline-1">
                        <li class="active"><a href="#"><span style="background-color: #7bef66;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #ff8888;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #c4dd66;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #94b7f7;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #a3fbff;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #f7fb0d;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #7b7878;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #d041ff;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #fdab14;" class="icon-color"></span></a></li>
                        <li><a href="#"><span style="background-color: #eeeeee" class="icon-color"></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-color-->

                <div class="mv-aside mv-aside-products">
                  <div class="aside-title mv-title-style-11">products</div>
                  <div class="aside-body">
                    <div class="products-list">
                      <div class="mv-block-style-24">
                        <div class="block-24-list">
                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Open Face Helmets"><img src="images/demo/demo_300x400.png" alt="demo"></a><a href="images/demo/demo_300x400.png" title="Open Face Helmets" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Open Face Helmets" class="mv-overflow-ellipsis">Open Face Helmets</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$200,00</div>
                                    <div class="old-price">$250,99</div>
                                  </div>
                                  <div data-rate="true" data-score="4.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars" style="width: 80%;"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Spada Enforcer WP"><img src="images/demo/demo_300x400.png" alt="demo"></a><a href="images/demo/demo_300x400.png" title="Spada Enforcer WP" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Spada Enforcer WP" class="mv-overflow-ellipsis">Spada Enforcer WP Spada Enforcer WP</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$300,00</div>
                                    <div class="old-price">$400,99</div>
                                  </div>
                                  <div data-rate="true" data-score="5.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars" style="width: 100%;"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="product-detail.html" title="Richa Drift Water"><img src="images/demo/demo_300x400.png" alt="demo"></a><a href="images/demo/demo_300x400.png" title="Richa Drift Water" data-lightbox-href="product-detail.html" class="mv-btn mv-btn-style-20 mv-lightbox-item"><i class="icon fa fa-search"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="product-detail.html" title="Richa Drift Water" class="mv-overflow-ellipsis">Richa Drift Water</a></div>
                                  <div class="block-24-price">
                                    <div class="new-price">$210,00</div>
                                    <div class="old-price">$290,99</div>
                                  </div>
                                  <div data-rate="true" data-score="3.0" class="block-24-rate mv-rate text-left">
                                    <div class="rate-inner mv-f-12">
                                      <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                      <div class="stars-wrapper filled-stars" style="width: 60%;"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->
                        </div>
                      </div>
                      <!-- .mv-block-style-24-->
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-products-->

                <div class="mv-aside mv-aside-tags">
                  <div class="aside-title mv-title-style-11">tags</div>
                  <div class="aside-body">
                    <div class="tag-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22 active">Gloves</a><a href="#" class="mv-btn mv-btn-style-22">Sercurity</a><a href="#" class="mv-btn mv-btn-style-22">Boots</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Luggage</a><a href="#" class="mv-btn mv-btn-style-22">Maintenance</a><a href="#" class="mv-btn mv-btn-style-22">Bodywork</a><a href="#" class="mv-btn mv-btn-style-22">Gift</a><a href="#" class="mv-btn mv-btn-style-22">Exhauts</a><a href="#" class="mv-btn mv-btn-style-22">Tyres</a><a href="#" class="mv-btn mv-btn-style-22">Casual Wear</a><a href="#" class="mv-btn mv-btn-style-22">R&amp;G Racing</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-tags-->
              </div>
            </div>
            <!-- .mv-c-s-sidebar-->
          </div>
        </div>
      </section>



@endsection


@section('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        // $('.dropdown').find('.dropdown-menu').stop(true, true).fadeOut().toggleClass("hover");
        // $('.dropdown').toggleClass("active"); var trigger = $('.discount_selector');

        $("#Slider1").slider({
            from: 0,
            to: 1000,
            step: 100,
            smooth: true,
            round: 0,
            change: function () {
                alert('testtttt')
            }
        });



        // $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        // $('.dropdown').toggleClass("active");

        $("#Slider1").on('change', function (event) {
            alert('te');
            // location.href="{{route('pro_all')}}?order="+$('#order').val()+"&&filter_min="+ui.values[0]+'&filter_max='+ui.values[1];
        });

    });




    function add_item_to_cart(pro_id) {
        let data = {
            pro_id: pro_id
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

    function showVal(test) {
        alert(test);
    }

    function set_secion(pro_id) {
        $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        $('.dropdown').toggleClass("active");
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        // }
        let data = {
            pro_id: pro_id
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
