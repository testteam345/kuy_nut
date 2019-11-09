@extends('layouts.fontend')
@section('contents')
<section class="main-banner mv-wrap">
    <div data-image-src="{{ env('APP_ASSET') }}assets/images/background/demo_bg_1920x1680.png"
        class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
        <div class="page-name mv-caption-style-6">
            <div class="container">
                <div class="mv-title-style-9"><span class="main">product detail</span><img
                        src="{{ env('APP_ASSET') }}assets/images/icon/icon_line_polygon_line.png" alt="icon"
                        class="line"></div>
            </div>
        </div>
    </div>
</section>

<section class="mv-main-body product-detail-main mv-bg-gray mv-wrap">
    <div class="container">
        <div class="post">
            <div class="block-info mv-box-shadow-gray-1">
                <div class="mv-block-style-27">
                    <div class="mv-col-wrapper">
                        <div class="mv-col-left block-27-col-slider">
                            <div class="mv-block-style-26">
                                <div class="product-detail-slider mv-slick-slide mv-lightbox-style-1">
                                    <div class="block-26-gallery-main">
                                        <div class="slider gallery-main">
                                            <div class="slick-slide">
                                                <div class="slick-slide-inner"><a
                                                        href="{{ env('APP_ASSET') }}images/product_img/{{$product[0]->pro_img}}"
                                                        title="" class="mv-lightbox-item"><img
                                                            src="{{ env('APP_ASSET') }}images/product_img/{{$product[0]->pro_img}}" alt="demo"
                                                            class="block-26-main-img" /></a></div>
                                            </div>
                                            <!-- .slick-slide-->
<input type="hidden" name="pro_id_hidden" id="pro_id_hidden" value="{{$product[0]->pro_id}}">
                                        </div>
                                    </div>
                                </div>
                                <!-- .product-detail-slider-->
                            </div>
                            <!-- .mv-block-style-26-->
{{-- 
                            <div onclick="$(this).remove()" class="block-27-sale-off mv-label-style-2 text-center">
                                <div class="label-2-inner">
                                    <ul class="label-2-ul">
                                        <li class="number">-25%</li>
                                        <li class="text">sale</li>
                                    </ul>
                                </div>
                            </div> --}}

                            {{-- <div><img src="images/demo/demo_120x40.png" alt="demo" onclick="$(this).remove()"
                                    class="block-27-logo" /></div> --}}
                        </div>

                        <div class="mv-col-right block-27-col-info">
                            <div class="col-info-inner">
                                <div class="block-27-info">
                                    <div class="block-27-title">{{$product[0]->pro_name}}</div>


                                    <div class="block-27-price">
                                        <div class="new-price">฿{{$product[0]->pro_price}}</div>
                                    </div>

                                    <div class="block-27-desc">{{$product[0]->pro_sub_detail}}</div>

                                    <div class="block-27-table-info">
                                        <form method="GET">
                                            <table>
                                                <tr>
                                                    <td>Quantity:</td>
                                                    <td>
                                                        <div class="mv-spinner-style-1 input-quantity-wrapper">
                                                            <input type="text" id="pro-qunt" name="test138" value="1"
                                                                class="mv-inputbox mv-only-numeric input-quantity-product-detail" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Categories:</td>
                                                    <td>
                                                        <div class="mv-list-inline-style-2">
                                                            <ul class="list-inline-2">
                                                                <li class="active"><a href="#" class="mv-btn">{{$product[0]->cate_name}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
                                            </table>
                                        </form>
                                    </div>
                                </div>
                                <!-- .block-27-info-->

                                <div class="block-27-message content-message mv-message-style-1">
                                    <div class="message-inner"></div>
                                </div>
                                <!-- .block-27-message-->
                            </div>

                            <div class="block-27-button">
                                <div class="mv-dp-table align-middle">
                                    <div class="mv-dp-table-cell">
                                        <div class="mv-btn-group text-left">
                                            <div class="group-inner">
                                                @if(Session::has('user_id'))
                                                <button type="button" onclick="add_item_to_cart({{$product[0]->pro_id}})" class="mv-btn mv-btn-style-1 btn-1-h-50 responsive-btn-1-type-3 btn-add-to-cart">
                                                    <span class="btn-inner">
                                                        <i class="btn-icon fa fa-cart-plus"></i>
                                                        <span class="btn-text">add to cart</span>
                                                    </span>
                                                </button>
                                                @else
                                                <button type="button" data-toggle="modal" data-target="#popupNewsletter"  onclick="set_secion({{$product[0]->pro_id}})" class="mv-btn mv-btn-style-1 btn-1-h-50 responsive-btn-1-type-3 btn-add-to-cart">
                                                        <span class="btn-inner">
                                                            <i class="btn-icon fa fa-cart-plus"></i>
                                                            <span class="btn-text">add to cart</span>
                                                        </span>
                                                    </button>
                                                @endif

                                                <button type="button"
                                                    class="mv-btn mv-btn-style-3 btn-3-h-50 responsive-btn-3-type-1 btn-add-to-wishlist"><i
                                                        class="fa fa-heart-o"></i></button>
                                                <button type="button"
                                                    class="mv-btn mv-btn-style-3 btn-3-h-50 responsive-btn-3-type-1 btn-compare"><i
                                                        class="btn-icon fa fa-signal"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .mv-block-style-27-->
            </div>
            <!-- .block-info-->

            <div class="row block-info-more">
                <div class="col-sm-6 col-specification">
                    <div class="specification-main mv-tab-style-3 mv-box-shadow-gray-1 mv-bg-white">
                        <ul role="tablist" class="tab-list nav nav-tabs">
                            <li role="presentation" class="active"><a href="#tab31" aria-controls="tab31" role="tab"
                                    data-toggle="tab">Description</a></li>
                          
                           
                        </ul>

                        <div class="tab-content">
                            <div id="tab31" role="tabpanel" class="tab-pane active">
                                <p>{{$product[0]->pro_detail}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- .specification-main-->
                </div>

                <div id="customer-review" class="col-sm-6 col-review">
                    <div class="review-main mv-well-style-1 mv-box-shadow-gray-1 mv-bg-white">
                        <div class="well-1-header">
                            <div class="mv-title-style-11">customer review</div>
                        </div>
                        <div class="well-1-body">
                            <div class="review-profile">
                                <div class="mv-block-style-37">
                                    <div class="block-37-thumb"><a href="#"><span
                                                style="background-image: url({{ env('APP_ASSET') }}assets/images/avatar/avatar_100x100.png);"
                                                class="block-37-thumb-img"></span></a></div>
                                    <div class="block-37-main">
                                        <div class="block-37-name"><a href="#">{{ Session::get('name') }}</a></div>
                                    </div>
                                </div>
                                <!-- .mv-block-style-37-->
                            </div>
                            <!-- .review-profile-->

                            <div class="review-rating-field">
                                <form method="GET" class="form-review">
                                    <div class="mv-form-group rating-field">
                                        <div class="mv-field">
                                            <div class="mv-rate enabled-rating"><strong class="label-rating">Rate this
                                                    product: </strong>
                                                <div class="rate-inner mv-f-28 text-left">
                                                    <div class="stars-wrapper"><a class="item-rate"></a><a
                                                            class="item-rate"></a><a class="item-rate"></a><a
                                                            class="item-rate"></a><a class="item-rate"></a></div>
                                                    <input type="hidden" name="rate_hidden" id="rate_hidden" class="input-score-rate" />
                                                </div><span class="rate-text"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv-form-group">
                                        <div class="mv-field">
                                            <textarea name="review_content" id="review_content" data-mv-placeholder="Description"
                                                placeholder="Description"
                                                class="mv-resize-vertical mv-inputbox mv-inputbox-style-1 textarea-desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="mv-form-group text-right">
                                        <div class="mv-field">
                                            <button type="button" class="mv-btn mv-btn-style-5 responsive-btn-5-type-2" onclick="post_review({{ Session::get('user_id')}},{{$product[0]->pro_id}})">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--.review-rating-field-->

                            <div class="review-list mv-block-style-28">
                                <div class="block-28-list" id="review_show">
                                    <div class="item">
                                        <div class="mv-dp-table">
                                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span
                                                        style="background-image: url(images/avatar/avatar_100x100.png);"
                                                        class="block-28-thumb-img"></span></a></div>
                                            <div class="mv-dp-table-cell block-28-main">
                                                <div class="block-28-main-header">
                                                    <div class="block-28-name"><a href="#">Jonathan Doe</a></div><span
                                                        class="block-28-date">December 21, 2016</span>
                                                    <div data-rate="true" data-score="1" class="block-28-rate mv-rate">
                                                        <div class="rate-inner mv-f-14 text-left">
                                                            <div class="stars-wrapper empty-stars">
                                                                <span
                                                                    class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                </div>
                                                                <div class="stars-wrapper filled-stars">
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                    <span class="item-rate"></span>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-28-desc">Proin est purus, elementum eu tempus ut,
                                                    molestie vel magnaauctor nibh. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .item-->

                                    <div class="item">
                                        <div class="mv-dp-table">
                                            <div class="mv-dp-table-cell block-28-thumb"><a href="#"><span
                                                        style="background-image: url(images/avatar/avatar_100x100.png);"
                                                        class="block-28-thumb-img"></span></a></div>
                                            <div class="mv-dp-table-cell block-28-main">
                                                <div class="block-28-main-header">
                                                    <div class="block-28-name"><a href="#">Louis Higgins</a></div>
                                                    <div class="block-28-date">December 01, 2016</div>
                                                    <div data-rate="true" data-score="5" class="block-28-rate mv-rate">
                                                        <div class="rate-inner mv-f-14 text-left">
                                                            <div class="stars-wrapper empty-stars"><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span></div>
                                                            <div class="stars-wrapper filled-stars"><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span><span
                                                                    class="item-rate"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-mv-resize-height="none" class="block-28-desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                                                        atque, voluptatem sapiente odit aperiam</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                                                        atque, voluptatem sapiente odit aperiam</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                                                        atque, voluptatem sapiente odit aperiam</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                                                        atque, voluptatem sapiente odit aperiam</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta
                                                        atque, voluptatem sapiente odit aperiam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .item-->
                                </div>
                            </div>
                            <!-- .review-list-->

                     
                            <!-- .review-pagination-->
                        </div>
                    </div>
                    <!-- .review-main-->
                </div>
            </div>
            <!-- .block-info-more-->
        </div>
        <!-- .post-->
    </div>
</section>

@endsection
@section('javascript')
<script>
    $(document).ready(function () {
        load_review()
        $('#rate_hidden').change(function (e) { 
            e.preventDefault();
            alert($(this).val())
        });
    });

    function add_item_to_cart(pro_id) {
        let data = {
            pro_id: pro_id,
            qty: $('#pro-qunt').val()
        }
        $.post("{{route('add_item_to_cart')}}", data,
            function (data, textStatus, jqXHR) {
                str = '<div class="alert">'
                str += '<div class="alert-icon">'
                str += '<i class="fa fa-check-circle"></i>'
                str += '</div>'
                str += '<div class="alert-content">'
                str += '<h4>Item Was Successfully Added To Your Cart.</h4>'
                str += '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing'
                str +=
                    'condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in'
                str += 'elementum purus molestie.</p>'
                str += '</div>'
                str += '</div>'
                load_list_cart()
                alert_s()
            },
            "json"
        );
    }

    function load_review() {
        let data = {
            pro_id: $('#pro_id_hidden').val()
        }

        $.post("{{route('get_post_review')}}", data,
            function (data, textStatus, jqXHR) {
                let str = '';
                data = data.data
                let rate_total = 0;
                for (let i = 0; i < data.length; i++) {
                    let current_datetime = new Date(data[i].create_date)
                    let formatted_date = current_datetime.getDate() + "/" + (current_datetime.getMonth() + 1) + "/" + current_datetime.getFullYear()

                str += '<div class="item">'
                str += '<div class="mv-dp-table">'
                str += '<div class="mv-dp-table-cell block-28-thumb"><a href="#"><span'
                str += 'style="background-image: url(images/avatar/avatar_100x100.png);"'
                str += 'class="block-28-thumb-img"></span></a></div>'
                str += '<div class="mv-dp-table-cell block-28-main">'
                str += '<div class="block-28-main-header">'
                str += '<div class="block-28-name"><a href="#">' + data[i].name + '</a></div><span'
                str += 'class="block-28-date">'+formatted_date+'</span>'
                str += '    <span class="rate-inner mv-f-14 text-left">'
                str += '        <span class="stars-wrapper empty-stars">'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '        </span>'
                str += '        <span class="stars-wrapper filled-stars" style="width: '+((parseInt(data[i].review_rate)+5)*10)+'%;">'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '            <span class="item-rate"></span>'
                str += '        </span>'
                str += '    </span>'
                str += '</div>'
                str += '<div class="block-28-desc">'+data[i].review_content+'</div>'
                str += '</div>'
                str += '</div>'
                str += '</div>'
                 $('#review_show').html(str);
                $('#btn_revie').html('reviews(' + data.length + ')')
                $('#count_review').html('reviews(' + data.length + ')')
                $('#rate_views_total_avg').html(str);
            }},
            "json"
        );
    }

    function formatDate(date) {
        var monthNames = [
            "January", "February", "March",
            "April", "May", "June", "July",
            "August", "September", "October",
            "November", "December"
        ];

        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        return monthNames[monthIndex] + ' ' + day + ',' + year;
    }

    function post_review(user_id, pro_id) {
        let review_content = $('#review_content').val();
        let review_rate = $('input[name="rate_hidden"]').val();
        let data = {
            pro_id: pro_id,
            user_id: user_id,
            review_content: review_content,
            review_rate: review_rate
        };
        // console.log(review_rate);
        // return;
        $.post("{{route('post_review')}}", data,
            function (data, textStatus, jqXHR) {
                $('#review_content').val('')
                $('#review_rate').val('0')
                load_review()
            },
            "json"
        );

        // $.post("url", data,
        //     function (data, textStatus, jqXHR) {
                
        //     },
        //     "dataType"
        // );
       
    }



    function plus() {
        data = parseInt($('#pro-qunt').val());
        $('#pro-qunt').val(data += 1);
    }

    function pluss() {
        data = $('#pro-qunt').val();
        $('#pro-qunt').val(data - 1);
    }

    function set_secion(pro_id) {
        $('.dropdown').find('.log-in-pae').stop(true, true).fadeIn().toggleClass("hover");
        $('.dropdown').toggleClass("active");
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        let data = {
            pro_id: pro_id,
            qty: $('#pro-qunt').val()
        }
        $.post("{{route('set_session')}}", data,
            function (data, textStatus, jqXHR) {},
            "json"
        );
    }

</script>
@endsection
