<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="{{ env('APP_ASSET') }}assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/vendor/owl-slider.css" />
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/vendor/settings.css" />
    <link rel="stylesheet" href="{{ env('APP_ASSET') }}assets/css/passtrength.css">
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/vendor/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ env('APP_ASSET') }}assets/vendor/range-price.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> --}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Lukas - Car Parts Store eCommerce HTML Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CPoppins:400,400i,500,600&display=swap"
        rel="stylesheet">

    <!-- build:css assets/css/app.min.css -->
    <!--== Leaflet Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/leaflet.min.css" rel="stylesheet" />
    <!--== Nice Select Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/nice-select.min.css" rel="stylesheet" />
    <!--== Slick Slider Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/slick.min.css" rel="stylesheet" />
    <!--== Magnific Popup Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/magnific-popup.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/slicknav.min.css" rel="stylesheet" />
    <!--== Animate Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/animate.min.css" rel="stylesheet" />
    <!--== Ionicons Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/ionicons.min.css" rel="stylesheet" />
    <!--== Font-Awesome Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/style.css" rel="stylesheet" />
    <!--== Helper Min CSS ==-->
    <link href="{{ env('APP_ASSET') }}assets/css/helper.min.css" rel="stylesheet" />

    <title>Home Version 3</title>

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

<body>
    <!--== Start Header Area ==-->
    <header class="header-area">
        <div class="container container-wide">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-2">
                    <div class="site-logo text-center text-sm-left">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
                    </div>
                </div>

                <div class="col-lg-7 d-none d-lg-block">
                    <div class="site-navigation">
                        <ul class="main-menu nav">
                            <li class="has-submenu"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-boxed.html">Home Box Layout</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="has-submenu"><a href="shop.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="blog.html">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Single Blog</a></li>
                                    <li><a href="blog-details-sidebar.html">Single Blog Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="has-submenu"><a href="index.html">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-8 col-lg-3">
                    <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">

                        <ul class="login-reg-nav nav">
                            @if(Session::has('user_id'))
                        <li>{{ Session::get('name') }}</li>
                            @else
                            <li><a  href="#" data-toggle="modal" data-target="#login_modal">Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#register_modal">Register</a></li>
                            @endif
                            
                        </ul>

                        <div class="mini-cart-wrap">
                            <a href="cart.html" class="btn-mini-cart">
                                <i class="ion-bag"></i>
                                <span class="cart-total">3</span>
                            </a>

                            <div class="mini-cart-content">
                                <div class="mini-cart-product">
                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-1.png"
                                                    alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Auto Clutch & Brake</a></h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-2.png"
                                                    alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a>
                                            </h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-product">
                                        <div class="mini-product__thumb">
                                            <a href="single-product.html"><img src="assets/img/product/product-3.png"
                                                    alt="product" /></a>
                                        </div>
                                        <div class="mini-product__info">
                                            <h2 class="title"><a href="single-product.html">Leather Steering Wheel</a>
                                            </h2>

                                            <div class="mini-calculation">
                                                <p class="price">5 x <span>$20.33</span></p>
                                                <button class="remove-pro"><i class="ion-trash-b"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="responsive-menu d-lg-none">
                            <button class="btn-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Area ==-->

    @yield('contents')


    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <label for="username">username or email</label>
                  <input id="username" class="form-control" type="text" name="">
              </div>

              <div class="form-group">
                <label for="pwd">password</label>
                <input id="pwd" class="form-control" type="password" name="">
            </div>
            <button class="btn btn-primary" onclick="singIn()">Login</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <label for="re_pwd">username</label>
                  <input class="form-control" id="re_pwd" type="text" name="">
              </div>

              <div class="form-group">
                <label for="re_username">full name</label>
                <input class="form-control" id="re_username" type="text" name="">
            </div>

            <div class="form-group">
                <label for="re_email">E-mail</label>
                <input  class="form-control" id="re_email" type="text" name="">
            </div>

              <div class="form-group">
                <label for="re_pwdc">password</label>
                <input id="re_pwdc" class="form-control" type="password" name="">
            </div>
            <button class="btn btn-primary" onclick="register_user()">Login</button>
            </div>
          </div>
        </div>
      </div>
  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container container-wide">
            <div class="row mtn-40">
                <div class="col-lg-3">
                    <div class="widget-item">
                        <div class="about-widget">
                            <a href="index.html"><img src="assets/img/logo-light.png" alt="Logo" /></a>
                            <p>Lukas is the best parts shop for your car
                                accessories. What kind of parts do you
                                need you can get here soluta nobis</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="widget-item">
                        <h4 class="widget-title">Information</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="#">Our company</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Our services</a></li>
                                <li><a href="#">Why We?</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="widget-item">
                        <h4 class="widget-title">Quicklink</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2">
                    <div class="widget-item">
                        <h4 class="widget-title">Support</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Online Support</a></li>
                                <li><a href="#">Money Back</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Store Information</h4>
                        <div class="widget-body">
                            <address>
                                2005 Stokes Isle Apartment. 896, Washington 10010, USA <br>
                            https://example.com <br>
                            (+68) 120034509
                        </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p>Copyright © 2019 Lukas. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

 <!--== Start Responsive Menu Wrapper ==-->
 <aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="off-canvas-header">
                <div class="logo">
                    <a href="index.html"><img src="{{ env('APP_ASSET') }}assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="close-btn">
                    <button class="btn-close"><i class="ion-android-close"></i></button>
                </div>
            </div>

            <!-- Content Auto Generate Form Main Menu Here -->
            <div class="res-mobile-menu mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!--== End Responsive Menu Wrapper ==-->


   <!--=======================Javascript============================-->
    <!-- build:js assets/js/app.min.js -->
    <!--=== Modernizr Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/modernizr-3.6.0.min.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/jquery-3.3.1.min.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/jquery-migrate-1.2.1.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/bootstrap.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/jquery.slicknav.min.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/jquery.magnific-popup.min.js"></script>
    <!--=== Slick Slider Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/slick.min.js"></script>
    <!--=== Nice Select Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/jquery.nice-select.min.js"></script>
    <!--=== Leaflet Min Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/leaflet.min.js"></script>
    <!--=== Countdown Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/countdown.js"></script>

    <!--=== Active Js ===-->
    <script src="{{ env('APP_ASSET') }}assets/js/active.js"></script>
    <!-- endbuild -->

    {{-- <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery-1.11.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    {{-- <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/wow.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/price-range.js"></script>
    <script src="{{ env('APP_ASSET') }}assets/js/jquery.passtrength.js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/store.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/map-icons.js"></script>

    <script type="text/javascript" src="{{ env('APP_ASSET') }}assets/js/jquery.elevatezoom.js"></script> --}}

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

        function load_list_cart() {
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
                eyeImg: "{{ env('APP_ASSET') }}assets/images/eye.svg",
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
