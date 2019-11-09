@extends('layouts.fontend')

@section('contents')
<section class="main-banner mv-wrap">
    <div data-image-src="images/background/demo_bg_1920x1680.png"
        class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
        <div class="page-name mv-caption-style-6">
            <div class="container">
                <div class="mv-title-style-9"><span class="main">Shopping Cart</span><img
                        src="images/icon/icon_line_polygon_line.png" alt="icon" class="line" /></div>
            </div>
        </div>
    </div>
</section>
<!-- .main-banner-->

<section class="main-breadcrumb mv-wrap">
    <div class="mv-breadcrumb-style-1">
        <div class="container">
            <ul class="breadcrumb-1-list">
                <li><a href="home.html"><i class="fa fa-home"></i></a></li>
                <li><a>Shopping Cart</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- .main-breadcrumb-->

<section class="mv-main-body cart-main mv-bg-gray mv-wrap">
    <div class="container">
        <div class="cart-inner">
            <div class="cart-block block-cart-table mv-bg-white mv-box-shadow-gray-1 mv-mb-50">
                <div class="mv-table-responsive">
                    <table class="mv-table-style-2">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cart_item_l">
                            <tr class="calculate-price-wrapper post">
                                <td>
                                    <div class="mv-block-style-24">
                                        <div class="block-24-list">
                                            <article class="item item-cart">
                                                <div class="item-inner">
                                                    <div class="mv-dp-table">
                                                        <div class="mv-dp-table-cell block-24-thumb">
                                                            <div class="thumb-inner mv-lightbox-style-1"><img
                                                                    src="images/demo/demo_300x400.png" alt="demo" /><a
                                                                    href="images/demo/demo_300x400.png"
                                                                    title="Alpinestar ST1 WP Boots"
                                                                    data-lightbox-href="product-detail.html"
                                                                    class="mv-lightbox-item"><i
                                                                        class="icon fa fa-search"></i></a></div>
                                                        </div>
                                                        <div class="mv-dp-table-cell block-24-main">
                                                            <div class="block-24-title"><a href="product-detail.html"
                                                                    title="Alpinestar ST1 WP Boots"
                                                                    class="mv-overflow-ellipsis">Alpinestar ST1 WP
                                                                    Boots</a></div>
                                                            <div class="block-24-content">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Cumque sint culpa
                                                                laboriosam doloremque quam, tempora suscipit accusamus
                                                                laudantium iusto eaque assumenda, cum nisi beatae
                                                                pariatur temporibus odio. Nisi modi, fugit!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mv-font-secondary mv-f-18"><strong>$ <span
                                                class="calculate-price-unit">120.00</span></strong></div>
                                </td>
                                <td>
                                    <div class="mv-spinner-style-2">
                                        <input type="text" name="test138" value="1"
                                            class="mv-inputbox mv-only-numeric input-quantity-cart" />
                                    </div>
                                </td>
                                <td>
                                    <div class="mv-font-secondary mv-f-18"><strong>$ <span
                                                class="calculate-price-output">1200.00</span></strong></div>
                                </td>
                                <td>
                                    <button type="button" title="Remove from Cart"
                                        class="mv-btn mv-btn-style-4 fa fa-close btn-delete-product"></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- .block-cart-table-->

            <div class="cart-block block-button-update mv-bg-white mv-box-shadow-gray-1 mv-mb-50">
                <div class="row list-button">
                    <div class="col-xs-12 col-sm-4 col-left">
                        <button type="button" class="mv-btn mv-btn-style-14 mv-btn-block btn-14-h-45">update
                            totals</button>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-center">
                        <button type="button" class="mv-btn mv-btn-style-6 mv-btn-block btn-6-h-45">update cart</button>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-right">
                        <a href="{{route('update_cart_status')}}">
                        <button type="button" class="mv-btn mv-btn-style-5 mv-btn-block btn-5-h-45">proceed to
                            checkout</button></a>
                    </div>
                </div>
            </div>
            <!-- .block-button-update-->

            <div class="cart-block block-coupon-code mv-mb-50">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-coupon-code">
                        <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                            <div class="well-2-header">
                                <div class="mv-title-style-13">
                                    <div class="text-main">Coupon code</div>
                                </div>
                            </div>
                            <div class="well-2-body">
                                <div class="form-apply-coupon">
                                    <div class="form-body">
                                        <div class="mv-form-group">
                                            <div class="mv-field">
                                                <input type="text" name="test127" placeholder="Enter your coupon code"
                                                    data-mv-placeholder="Enter your coupon code"
                                                    class="mv-inputbox mv-inputbox-style-2" />
                                            </div>
                                        </div>
                                        <div class="mv-form-group">
                                            <div class="mv-field">
                                                <button type="button" class="mv-btn mv-btn-style-5 btn-5-h-40">apply
                                                    coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-calculate-shipping">
                        <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                            <div class="well-2-header">
                                <div class="mv-title-style-13">
                                    <div class="text-main">Calculate shipping</div>
                                </div>
                            </div>
                            <div class="well-2-body">
                                <div class="form-billing-address">
                                    <div class="form-body">
                                        <div class="mv-form-group">
                                            <div class="mv-label"> <strong class="text-uppercase">Country *</strong>
                                            </div>
                                            <div class="mv-field">
                                                <label class="mv-select mv-select-style-1 h-40">

                                                </label>
                                            </div>
                                        </div>

                                        <div class="mv-form-group">
                                            <div class="mv-label"> <strong class="text-uppercase">State / Province
                                                    *</strong></div>
                                            <div class="mv-field">
                                                <input type="text" name="test127"
                                                    class="mv-inputbox mv-inputbox-style-2" />
                                            </div>
                                        </div>

                                        <div class="mv-form-group">
                                            <div class="mv-label"> <strong class="text-uppercase">Zip / Postal code
                                                    *</strong></div>
                                            <div class="mv-field">
                                                <input type="text" name="test127"
                                                    class="mv-inputbox mv-inputbox-style-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .form-body-->
                                </div>
                                <!-- .form-billing-address-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-cart-totals">
                        <div class="mv-well-style-2 mv-box-shadow-gray-1 mv-bg-white">
                            <div class="well-2-header">
                                <div class="mv-title-style-13">
                                    <div class="text-main">Cart totals</div>
                                </div>
                            </div>
                            <div class="well-2-body">
                                <table class="mv-table-style-1">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase">Cart Subtotal</th>
                                            <th>
                                                <div style="font-size: 18px; margin-bottom: -3px;"
                                                    class="cart-subtotal-number">$1200.00</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-uppercase title-row">Shipping and hardling</td>
                                            <td>
                                                <div class="mv-radio-list">
                                                    <label class="mv-radio mv-radio-style-5">
                                                        <input type="radio" name="test138" checked="checked"
                                                            class="hidden" /><span class="radio-after-input"><span
                                                                class="radio-visual-box"><span
                                                                    class="icon-checked"></span></span><span
                                                                class="radio-text">Flat Rate: <br />
                                                                $100.00</span></span>
                                                    </label>
                                                    <label class="mv-radio mv-radio-style-5">
                                                        <input type="radio" name="test138" class="hidden" /><span
                                                            class="radio-after-input"><span
                                                                class="radio-visual-box"><span
                                                                    class="icon-checked"></span></span><span
                                                                class="radio-text">Free Shipping</span></span>
                                                    </label>
                                                    <label class="mv-radio mv-radio-style-5">
                                                        <input type="radio" name="test138" checked="checked"
                                                            class="hidden" /><span class="radio-after-input"><span
                                                                class="radio-visual-box"><span
                                                                    class="icon-checked"></span></span><span
                                                                class="radio-text">International Delivery: <br />
                                                                $175.00</span></span>
                                                    </label>
                                                    <label class="mv-radio mv-radio-style-5">
                                                        <input type="radio" name="test138" class="hidden" /><span
                                                            class="radio-after-input"><span
                                                                class="radio-visual-box"><span
                                                                    class="icon-checked"></span></span><span
                                                                class="radio-text">Local Delivery: <br />
                                                                $60.00</span></span>
                                                    </label>
                                                    <label class="mv-radio mv-radio-style-5">
                                                        <input type="radio" name="test138" class="hidden" /><span
                                                            class="radio-after-input"><span
                                                                class="radio-visual-box"><span
                                                                    class="icon-checked"></span></span><span
                                                                class="radio-text">Local Pickup <br />
                                                                (Free)</span></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="text-uppercase">Order Total</td>
                                            <td>
                                                <div style="font-size: 18px; margin-bottom: -3px;"
                                                    class="order-total-number">$ 7200.00</div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-coupon-code-->
        </div>
    </div>
</section>
<!-- .mv-main-body-->

<section class="main-newsletter mv-newsletter-style-1 mv-wrap">
    <div style="background-image: url(images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
        <div class="container">
            <form method="GET" class="form-newsletter">
                <label class="hidden-xs mv-label text-right text-uppercase">Newsletter</label>
                <div class="mv-field">
                    <div class="mv-inputbox-group">
                        <input type="text" name="test138" placeholder="Subscribe your email here"
                            data-mv-placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-3" />
                        <div class="inputbox-addon">
                            <button type="button" class="mv-btn mv-btn-block mv-btn-style-13"><span
                                    class="btn-icon fa fa-long-arrow-right"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
          get_data_cart_list()

        $('input[name="pae_cart"]').keyup(function (e) { 
            // e.preventDefault();
            update_qty($(this).val(),$(this).attr('data-id'));
        });
    });

    function get_data_cart_list() {
        $.ajax({
            type: "post",
            url: "{{route('get_cart_list')}}",
            dataType: "json",
            success: (data) => {
                console.log(data)
                let path = "{{ env('APP_ASSET') }}"
                let len = data.cart_list.length
                let str = '',
                    total = 0;
                for (let i = 0; i < len; i++) {
                    total += parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].cart_qty)
                    sub_total = parseFloat(data.cart_list[i].pro_price) * parseInt(data.cart_list[i].cart_qty)
                     str += '<tr class="calculate-price-wrapper post">'
                     str += '           <td>'
                     str += '               <div class="mv-block-style-24">'
                     str += '                   <div class="block-24-list">'
                     str += '                       <article class="item item-cart">'
                     str += '                           <div class="item-inner">'
                     str += '                               <div class="mv-dp-table">'
                     str += '                                   <div class="mv-dp-table-cell block-24-thumb">'
                     str += '                                       <div class="thumb-inner mv-lightbox-style-1"><img'
                     str += '                                              src="' + path + 'images/product_img/' + data.cart_list[i].pro_img +'" alt="demo" /><a'
                     str += '                                               href="' + path + 'images/product_img/' + data.cart_list[i].pro_img +'"'
                     str += '                                               title="Alpinestar ST1 WP Boots"'
                     str += '                                               data-lightbox-href="product-detail.html"'
                     str += '                                               class="mv-lightbox-item"><i'
                     str += '                                                   class="icon fa fa-search"></i></a></div>'
                     str += '                                   </div>'
                     str += '                                   <div class="mv-dp-table-cell block-24-main">'
                     str += '                                       <div class="block-24-title"><a href="product-detail.html"'
                     str += '                                               title="'+ data.cart_list[i].pro_name +'"'
                     str += '                                               class="mv-overflow-ellipsis">' + data.cart_list[i].pro_name 
                     str += '                                               </a></div>'
                     str += '                                       <div class="block-24-content">' + data.cart_list[i].pro_sub_detail +'</div>'
                     str += '                                   </div>'
                     str += '                               </div>'
                     str += '                           </div>'
                     str += '                       </article>'
                     str += '                   </div>'
                     str += '               </div>'
                     str += '           </td>'
                     str += '           <td>'
                     str += '               <div class="mv-font-secondary mv-f-18"><strong>฿ <span'
                     str += '                           class="calculate-price-unit">' + data.cart_list[i].pro_price + '</span></strong></div>'
                     str += '           </td>'
                     str += '           <td>'
                     str += '               <div class="mv-spinner-style-2">'
                     str += '                   <input type="text" name="test138" id="pro1-qunt' + data.cart_list[i].cart_id + '" onkeyup="update_qty('+(data.cart_list[i].cart_qty+1)+',' + data.cart_list[i].cart_id + ')"  data-id="' + data.cart_list[i].cart_id + '" value="'+data.cart_list[i].cart_qty+'"'
                     str += '                       class="mv-inputbox mv-only-numeric input-quantity-cart" />'
                     str += '               </div>'
                     str += '           </td>'
                     str += '           <td>'
                     str += '               <div class="mv-font-secondary mv-f-18"><strong>฿ <span'
                     str += '                           class="calculate-price-output">'+sub_total+'</span></strong></div>'
                     str += '           </td>'
                     str += '           <td>'
                     str += '               <button type="button" title="Remove from Cart" onclick="delete_cart(' + data.cart_list[i].cart_id + ')"'
                     str += '                   class="mv-btn mv-btn-style-4 fa fa-close btn-delete-product"></button>'
                     str += '           </td>'
                     str += '       </tr>'

                    // str += '<tr class="item_cart">'
                    // str += '<td class="product-photo">'
                    // str += '<img src="' + path + 'images/product_img/' + data.cart_list[i].pro_img +'" alt="Futurelife" height="100" width="100">'
                    // str += '</td>'
                    // str += '<td class="produc-name"> <a href="#" title="">' + data.cart_list[i].pro_name +'</a></td>'
                    // str += '<td class="product-price">' + data.cart_list[i].pro_price + '</td>'
                    // str += '<td class="product-quantity">'
                    // str += '<input type="number" size="4" id="pro1-qunt' + data.cart_list[i].cart_id +
                    //     '" onchange="plus(' + data.cart_list[i].cart_id +
                    //     ')" class="input-text qty text" title="SL" value="' + parseInt(data.cart_list[i].cart_qty) + '" min="0" step="1">'
                    // str += '</td>'
                    // str += '<td class="total-price">฿ ' + total.toFixed(2) + '</td>'
                    // str += '<td class="product-remove"><a class="remove" onclick="delete_cart(' + data.cart_list[i].cart_id + ')" href="#" title=""></a></td>'
                    // str += '</tr>';
                }
                $('#cart_item_l').html(str)
                // $('#in_cart_label').html(len)
                $('#sub_total').html('฿' + total.toFixed(2))
                vat = (total.toFixed(2) * 7) / 100
                $('#total_net').html('฿' + (total + vat).toFixed(2))
                $('#vat').html('฿' + (vat).toFixed(2))

            },
            error: (error) => {
                console.log(error)
            }
        });
    }


    function update_qty(qty, id) {
        let data = {
            qty: $('#pro1-qunt'+id).val(),
            id: id
        }
        $.post("{{route('update_qty')}}", data,
            function (data, textStatus, jqXHR) {
                get_data_cart_list()
                load_list_cart()
            },
            "json"
        );
    }


    function plus(id) {
        data = parseInt($('#pro1-qunt' + id).val());
        // $('#pro1-qunt'+id).val(data+=1);
        update_qty($('#pro1-qunt' + id).val(), id);
    }

    function pluss(id) {
        data = $('#pro1-qunt' + id).val();
        $('#pro1-qunt' + id).val(data - 1);
        update_qty($('#pro1-qunt' + id).val(), id);
    }

</script>
@endsection
