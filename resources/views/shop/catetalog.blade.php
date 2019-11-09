@extends('layouts.fontend')
{{-- @extends('layouts.master') --}}
@section('contents')
<div data-image-src="{{ env('APP_ASSET') }}images/background/demo_bg_1920x1680.png"
    class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-100 mv-parallax">
    <div class="page-name mv-caption-style-6">
        <div class="container">
        
        </div>
    </div>
</div>


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
              <!-- .mv-list-product-wrapper-->

              <div class="mv-pagination-wrapper">
                <div class="mv-pagination-style-1 has-count-post">
                  <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
                  {{-- <ul class="pagination">
                    <li class="prev"><a href="#">prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a>3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">next</a></li>
                  </ul> --}}
                 
                </div>
                <!-- .mv-pagination-style-1-->
              </div>
              <!-- .mv-pagination-wrapper-->
            </div>
            <!-- .mv-c-s-content-->

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
                          <div class="mv-dp-table-cell view-values">Price: ฿<span class="min-value">100</span> - ฿<span class="max-value">10000</span></div>
                          <div class="mv-dp-table-cell filter-button">
                            <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-30">filter</button>
                          </div>
                        </div>
                      </div>
                    </form>

                    <nav class="filter-by-price-menu mv-menu-style-1">
                      <ul>
                        <li><a href="#" class="mv-icon-left-style-5">฿100 - ฿500<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">฿500 - ฿1000<span class="sub-text">&nbsp; (8)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">฿1000 - ฿2000<span class="sub-text">&nbsp; (3)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">฿2000 - ฿3000<span class="sub-text">&nbsp; (16)</span></a></li>
                        <li><a href="#" class="mv-icon-left-style-5">฿3000 - ฿10000<span class="sub-text">&nbsp; (6)</span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-filter-by-price-->
              

                <div class="mv-aside mv-aside-tags">
                  <div class="aside-title mv-title-style-11">tags</div>
                  <div class="aside-body">
                    <div class="tag-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">ADIDAS</a><a href="#" class="mv-btn mv-btn-style-22 active">NIKE</a><a href="#" class="mv-btn mv-btn-style-22">PUMA</a><a href="#" class="mv-btn mv-btn-style-22">UHLSPORT</a><a href="#" class="mv-btn mv-btn-style-22">REUSCH</a><a href="#" class="mv-btn mv-btn-style-22">AVIATA</a><a href="#" class="mv-btn mv-btn-style-22">APD</a><a href="#" class="mv-btn mv-btn-style-22">SELLS</a><a href="#" class="mv-btn mv-btn-style-22">Ho Soccer</a></div>
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
