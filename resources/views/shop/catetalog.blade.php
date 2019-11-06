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


<section class="mv-main-body product-grid-5-fullwidth-main mv-bg-gray mv-wrap">
    <div class="container-fluid">
        <div class="row mv-list-product-wrapper mv-block-style-9">
            <div class="block-9-list mv-list-product">
                @foreach ($products as $product)
                <article class="col-xs-6 col-sm-4 item item-product-grid-2 post">
                    <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                        <div class="content-thumb">
                            <div class="thumb-inner mv-effect-relative"><a href="product-detail.html"
                                    title="RST Full Zipped Sweatshirt"><img
                                        src="{{ env('APP_ASSET') }}images/product_img/{{$product->pro_img}}" alt="demo"
                                        class="mv-effect-item"></a><a href="product-detail.html"
                                    title="RST Full Zipped Sweatshirt"
                                    class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span
                                        class="btn-inner"></span></a>

                                <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                                    {{-- <div class="label-2-inner">
                                        <ul class="label-2-ul">
                                            <li class="number">-25%</li>
                                            <li class="text">sale</li>
                                        </ul>
                                    </div> --}}
                                </div>

                                <div class="content-message mv-message-style-1">
                                    <div class="message-inner"></div>
                                </div>
                            </div>
                        </div>

                        <div class="content-default">
                            <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                                <div class="rate-inner mv-f-14">
                                    <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span
                                            class="item-rate"></span><span class="item-rate"></span><span
                                            class="item-rate"></span><span class="item-rate"></span></div>
                                    <div class="stars-wrapper filled-stars" style="width: 100%;"><span
                                            class="item-rate"></span><span class="item-rate"></span><span
                                            class="item-rate"></span><span class="item-rate"></span><span
                                            class="item-rate"></span></div>
                                </div>
                            </div>

                            <div class="content-price"><span class="new-price">฿ {{$product->pro_price}}</span></div>

                            <div class="content-desc"><a href="{{route('get_one_product',['id'=>$product->pro_id])}}"
                                    title="RST Full Zipped Sweatshirt"
                                    class="mv-overflow-ellipsis">{{$product->cate_name}}</a></div>
                        </div>

                        <div class="content-hover">
                            <div class="content-button mv-btn-group text-center mv-lightbox-style-1">
                                <div class="group-inner">
                                    <button type="button"
                                        class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-2 btn-add-to-wishlist"><i
                                            class="fa fa-heart-o"></i></button>
                                    <button type="button"
                                        class="mv-btn mv-btn-style-1 btn-1-h-40 responsive-btn-1-type-6 btn-compare"><span
                                            class="btn-inner"><i class="btn-icon fa fa-signal"></i><span
                                                class="btn-text">compare</span></span></button>
                                    @if(Session::has('user_id'))
                                    <button type="button"
                                    onclick="add_item_to_cart({{$product->pro_id}})" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-2 btn-add-to-cart"><i
                                            class="fa fa-cart-plus"></i></button>
                                            @else
                                            <button type="button" data-toggle="modal" data-target="#popupNewsletter" onclick="set_secion({{$product->pro_id}})"
                                            class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-2 btn-add-to-cart"><i
                                                class="fa fa-cart-plus"></i></button>
                                            @endif
                                            
                                            <a href="{{ env('APP_ASSET') }}assets/images/demo/demo_80.png"
                                        title="RST Full Zipped Sweatshirt" data-lightbox-href="product-detail.html"
                                        style="margin-right: 0;"
                                        class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-2 btn-zoom mv-lightbox-item hidden-xs"><i
                                            class="fa fa-search"></i></a><a href="{{ env('APP_ASSET') }}assets/images/demo/demo_14.png"
                                        title="RST Full Zipped Sweatshirt" data-lightbox-href="product-detail.html"
                                        class="mv-lightbox-item hidden"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- .post-->
                @endforeach



            </div>
        </div>
        <!-- .mv-list-product-wrapper-->

        <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 text-center">
                <ul class="pagination">
                    <li class="prev"><a href="#">prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a>3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">next</a></li>
                </ul>
            </div>
            <!-- .mv-pagination-style-1-->
        </div>
        <!-- .mv-pagination-wrapper-->
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
