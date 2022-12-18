<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_S&W</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href=".CSS/bootstrap.min.cs">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&subset=vietnamese');

        .clearf {
            padding: 0;
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #10304c;
            margin: 0 0 13px 0;
            font-weight: 500;
            line-height: 1.2
        }

        h1 {
            font-size: 36px;
        }

        h2 {
            font-size: 28px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 13px;
            line-height: 18px;
        }

        h5 {
            font-size: 12px;
            line-height: 18px;
        }

        h6 {
            font-size: 10px;
            line-height: 18px;
            text-transform: uppercase;
        }

        ul,
        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
            color: #000;
            text-transform: uppercase;

        }

        .menu-desktop a {
            transition: opacity 150ms linear, color 150ms linear, background 150ms linear;
        }



        .menu-desktop a:hover {
            color: #000;
            color: rgba(0, 0, 0, 0.3);
        }

        p {
            margin: 0 0 10px 0;
            line-height: 21px;
        }

        * {
            font-family: 'Quicksand', sans-serif !important;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-body {
            line-height: 1.4;
            font-size: 14px;
            color: #252a2b;
            background: #fff;

        }

        @media(min-width:1200px) {
            .container-fluid {
                max-width: 1600px;
                padding: 0 85px;
            }

            .wrapper-home-information .container-fluid {
                padding-left: 0;
            }

            .layout-pageContact .container-fluid {
                padding-left: 0;
            }
        }

        .container-fluid {
            max-width: 1600px;
            margin-left: auto;
            margin-right: auto;
        }



        .topbar-content p {
            padding: 4px 0;
            margin-bottom: 0;
            font-size: 12px;
        }

        .text-center {
            text-align: center;

        }


        .main-nav>ul>li {
            position: relative;
            float: none;
            display: inline-block;
            z-index: 10
        }

        .wrap-logo a img {
            width: 100%;
            height: 50px;
        }

        .navbar {
            padding: 0;
        }

        .menu-desktop .main-nav>ul>li a {
            display: block;
            font-size: 15px;
            font-weight: 400;
            padding: 10px 0 15px;
            margin: 0 12px;
            position: relative;
            text-transform: uppercase;

        }

        .flex-headercontent {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10.5px;

        }

        .header {
            background-color: #10304c;
            color: #fff;
        }

        .img-icon {
            height: auto;
            width: 20px;
        }

        .flex-headercontent>div[class*='header-upper-'] {
            padding: 0 15px;
        }

        .header-text {
            display: inline-block;
            margin-left: 12px;
        }

        .wrapper-heading-home {
            padding: 50px 0;
            text-align: center;
        }

        .section .classify {
            opacity: 1;
            transform: translateY(0);
            animation: bounce 0.5s reverse;
        }

        .classify {
            opacity: 0;
        }

        @keyframes bounce {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(60px);
            }
        }

        .wrapper-heading-home h2 {
            font-size: 37px;
            line-height: 1.6;
            margin: 0;
            font-weight: 500;
            text-transform: uppercase;
        }

        .wrapper-heading-home a:hover {
            color: #000;
        }

        .row {
            margin: 0 15px;
        }

        .content-product-list {
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
            justify-items: center;
        }


        .content-product-list .product-li {
            width: 100%;
            max-width: 280px;
            padding: 0 15px;
            text-align: center;

        }

        .content-product-list .product-li img {
            width: 100%;
        }

        .product-detail p {
            margin: 0;
            padding: 0;
        }

        .product-detail {
            padding-top: 15px;
            padding-bottom: 50px;
        }

        .buttum {
            background-color: #10304c;
            padding: 10px 32px;
            color: #fff;
            font-size: 12px;
            border: 1px solid #fff;
            position: relative;
            margin: 15px;
        }

        .buttum:hover {
            color: #fff;
        }

        .product-img {
            position: relative;
        }

        .product-img a {
            display: block;
        }

        .product-quick-wiew {
            position: absolute;
            bottom: 0;
            width: 100%;
            display: flex;
            opacity: 0;
            height: 100%;
            align-items: flex-end;


        }

        .product-quick-wiew:hover {
            opacity: 1;
            transition: all 0.5s;

        }

        .action {
            width: 50%;
            height: 15%;
            border: none;
            font-size: 12px;
            font-weight: 300;
            text-transform: capitalize;
        }

        .wraper-home-banner {
            width: 100%;
            height: auto;
            margin-top: 60px;
        }



        .banner-main {

            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            overflow: hidden;
        }



        .home-banner {
            width: 33.333%;
            min-width: 280px;
            position: relative;
            overflow: hidden;
        }

        .home-banner:hover img {
            transform: scale(1.2);
        }

        @media (max-width:620px) {
            .wraper-home-banner .home-banner {
                width: 100%;
            }
        }

        @media (max-width:840px) {
            .banner-main {
                display: flex;
                flex-direction: column;
                align-content: center;
            }


            .wraper-home-banner .home-banner {
                display: inline-block;
                width: 50%;
            }
        }

        .block-banner {
            position: relative;
        }

        .block-banner a {
            display: block;
        }

        .block-banner img {
            width: 100%;
            transition: all 6s;

        }

        .btn-banner {
            position: absolute;
            bottom: 50px;
            padding: 0 50px;
            align-items: flex-end;
            width: 100%;
        }


        .btn-banner a {
            font-weight: 400;
            font-size: 13px;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 10px 28px;
            width: 37%;
            min-width: 206px;
            letter-spacing: 1px;
            text-align: center;
            position: relative;

        }

        .btn-banner a:hover {
            background-color: rgba(0, 0, 0, 0.02) !important;
            transition: 1s;
            transition-delay: 0.45s;
            color: #000;
        }

        .btn-banner a span {
            position: absolute;
            background-color: #000;
            display: block;
            transition: all 0.15s linear;
        }

        .btn-banner a span:nth-child(1) {
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;

        }

        .btn-banner a span:nth-child(2) {
            top: 0;
            right: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.15s;
        }

        .btn-banner a span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 0%;
            height: 2px;
            transition-delay: 0.3s;
        }

        .btn-banner a span:nth-child(4) {
            bottom: 0;
            left: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.45s;
        }

        .btn-banner a span:nth-child(1) {
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;

        }

        .btn-banner a span:nth-child(2) {
            top: 0;
            right: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.15s;
        }

        .btn-banner a span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 0%;
            height: 2px;
            transition-delay: 0.3s;
        }

        .btn-banner a span:nth-child(4) {
            bottom: 0;
            left: 0;
            width: 2px;
            height: 0%;
            transition-delay: 0.45s;
        }

        .btn-banner a:hover span:nth-child(odd) {
            width: 100%;
        }

        .btn-banner a:hover span:nth-child(even) {
            height: 100%;
        }


        .btn-banner h3 {
            font-size: 23px;
            color: #000;
        }

        .heading-bottom-main {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .heading-bottom-main #heading {
            font-size: 37px;
            line-height: 1.6;
            margin: 0;
            font-weight: 500;
        }

        .topfooter {
            background-color: #f3f3f3;
            padding: 15px;
        }

        .footer input {
            height: 46px;
        }

        .area_newsletter {
            display: flex;
            align-items: center;
        }

        .title_newsletter {
            display: flex;
            align-items: center;
            width: 26%;
            min-width: 180px;
        }

        .title_newsletter .bi {
            margin-right: 10px;
        }

        .title_newsletter h2 {
            text-align: center;
            margin: 0;
            font-size: 15px;
            font-weight: 400;
        }

        .form_newsletter {
            width: 100%;
            min-width: 200px;
        }

        .form-inline {
            position: relative;
        }

        .form-group {
            display: inline-block;
            margin: 0;
            height: 46px;
            width: 100%;

        }

        .form-control {
            border-radius: 0;
        }

        .btn-email {
            border: 1px solid #4a90e2;
            padding: 10px 25px;
            display: inline-block;
            height: 46px;
            text-transform: uppercase;
            font-size: 13px;
            position: absolute;
            right: 0;
        }

        .area_phone_contact .number_phone i {
            border: 1px solid #000;
            padding: 4px;
        }

        .area_phone_contact {
            height: 100%;
            align-items: center;
            display: flex;
            min-width: 250px;
        }

        .number_phone {
            margin: 0;
            font-size: 14px;
        }

        .number_phone a {
            color: #254e9e;
            font-size: 16px;
        }

        .main-footer {
            border-top: 1px solid #e7e7e7;
            border-bottom: 1px solid #e7e7e7;
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .footer-list {
            display: flex;
            margin-left: 15px;
            margin-right: 15px;

        }

        .footer h4,
        ul {
            padding-left: 0;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-col-1 img {
            width: 70%;
        }

        .footer-col {

            height: 100%;
            margin-left: 50px;
        }

        .footer-col li,
        h4 {
            font-size: 15px;
        }

        .footer-col #link-facebook {
            font-size: 20px;
            color: #254e9e;
        }

        .bottom-footer {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .bottom-footer p {
            font-size: 14px;
        }

        .bottom-footer a {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <div class="main-body">
        <div class="header">
            <div class="container-fluid">
                <div class="topbar-content text-center">
                    <p>CSKH : 082.3304.717 / Email : 2121TT0522@mai.tdc.edu.vn </p>
                </div>
            </div>
        </div>
        <div class="menu-logo">
            <div class="container-fluid">
                <div class="flex-headercontent">
                    <div class="logo-topbar header-upper-logo">
                        <div class="header-upper-logo wrap-logo">
                            <a href="">
                                <img src="IMAGES/logo-s&w.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hearder-upper-menu hidden-sm hidden-xs custum-menu-desktop">
                        <div class="menu-desktop">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="main-nav collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="">
                                            <a href="" title="Trang chủ">Trang chủ</a>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Áo">Áo</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="">Áo thun</a>
                                                </li>
                                                <li>
                                                    <a href="">Áo sơ mi</a>
                                                </li>
                                                <li>
                                                    <a href="">Áo croptop</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Áo khoác">Áo khoác</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="">Áo khoác dù</a>
                                                </li>
                                                <li>
                                                    <a href="">Áo (khoác) len</a>
                                                </li>
                                                <li>
                                                    <a href="">Áo khoác nỉ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Quần">Quần</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="">Quần ngắn</a>
                                                </li>
                                                <li>
                                                    <a href="">Quần dài</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Đầm">Đầm</a>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Váy">Váy</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="">Váy ngắn</a>
                                                </li>
                                                <li>
                                                    <a href="">Váy dài</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Blog">Blog</a>
                                        </li>
                                        <li class=" ">
                                            <a href="" title="Liên hệ">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="header-upper-icon">
                        <div class="wrap-icon">
                            <div class="header-text">
                                <a href="" class="header-search__link">
                                    <img class="img-icon" src="IMAGES/header_icon/header_icon_search.svg" alt="" title="Tìm kiếm" aria-label="Tìm kiếm">
                                </a>
                            </div>

                            <div class="header-text">
                                <a href="" class="header-accout">
                                    <img class="img-icon" src="IMAGES/header_icon/header_icon_accout.svg" alt="" title="Tài khoản" aria-label="Tài khoản">
                                </a>
                            </div>

                            <div class="header-text">
                                <a href="index.php" class="header-cart">
                                    <img class="img-icon" src="IMAGES/header_icon/header_icon_cart.svg" alt="" title="Giỏ hàng" aria-label="Giỏ hàng">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-theme">
            <div class="home-slider slider-sm slider-xm">
                <div class="homepage-slider">
                    <a id="slider-link" href="">
                        <img src="IMAGES/home_slider_link1.webp" alt="" style="width: 100%;">
                    </a>
                </div>
            </div>
            <section class="section section-collection">
                <div class="wrapper-heading-home text-center">
                    <div class="container-fluid">
                        <div class="classify" data-aos="fade-up">
                            <h2>
                                <a href="">Sản phẩm mới</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="wraper-conllection-1">
                    <div class="container-fluid">
                        <div class="row" height: auto;">
                            <div class="content-product-list">

                                <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                                    <div class="product-img">
                                        <a class="image" href="" title="ĐẦM ZELDA">
                                            <picture>
                                                <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                            </picture>
                                        </a>
                                        <div class="button-add product-quick-wiew">
                                            <button type="submit" title="Mua ngay" class="action" onclick="">
                                                <span>Mua ngay</span>
                                                <i class="bi bi-cart-fill"></i>
                                            </button>
                                            <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                                <span>Xem chi tiết</span>
                                                <i class="bi bi-eyeglasses"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="product-detail">
                                        <div class="pro-name">
                                            <div class="box-detail">
                                                <p style="font-weight: 500;">ĐẦM ZELDA</p>
                                            </div>
                                        </div>

                                        <div class="pro-prices">
                                            <span>
                                                270,000đ
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                                <div class="product-img">
                                    <a class="image" href="" title="ĐẦM ZELDA">
                                        <picture>
                                            <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                        </picture>
                                    </a>
                                    <div class="button-add product-quick-wiew">
                                        <button type="submit" title="Mua ngay" class="action" onclick="">
                                            <span>Mua ngay</span>
                                            <i class="bi bi-cart-fill"></i>
                                        </button>
                                        <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                            <span>Xem chi tiết</span>
                                            <i class="bi bi-eyeglasses"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-detail">
                                    <div class="pro-name">
                                        <div class="box-detail">
                                            <p style="font-weight: 500;">ĐẦM ZELDA</p>
                                        </div>
                                    </div>

                                    <div class="pro-prices">
                                        <span>
                                            270,000đ
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                            <div class="product-img">
                                <a class="image" href="" title="ĐẦM ZELDA">
                                    <picture>
                                        <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                    </picture>
                                </a>
                                <div class="button-add product-quick-wiew">
                                    <button type="submit" title="Mua ngay" class="action" onclick="">
                                        <span>Mua ngay</span>
                                        <i class="bi bi-cart-fill"></i>
                                    </button>
                                    <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                        <span>Xem chi tiết</span>
                                        <i class="bi bi-eyeglasses"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="product-detail">
                                <div class="pro-name">
                                    <div class="box-detail">
                                        <a style="font-weight: 500;">ĐẦM ZELDA</a>
                                    </div>
                                </div>

                                <div class="pro-prices">
                                    <span>
                                        270,000đ
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                        <div class="product-img">
                            <a class="image" href="" title="ĐẦM ZELDA">
                                <picture>
                                    <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                </picture>
                            </a>
                            <div class="button-add product-quick-wiew">
                                <button type="submit" title="Mua ngay" class="action" onclick="">
                                    <span>Mua ngay</span>
                                    <i class="bi bi-cart-fill"></i>
                                </button>
                                <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                    <span>Xem chi tiết</span>
                                    <i class="bi bi-eyeglasses"></i>
                                </button>
                            </div>
                        </div>

                        <div class="product-detail">
                            <div class="pro-name">
                                <div class="box-detail">
                                    <p style="font-weight: 500;">ĐẦM ZELDA</p>
                                </div>
                            </div>

                            <div class="pro-prices">
                                <span>
                                    270,000đ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="wiew-more-prod text-center">
            <a class="buttum btn-home-wiew-more" href="">
                Xem thêm
            </a>
        </div>

    </div>
    </div>
    </div>
    </div>
    <section class="section section-collection">
        <div class="wrapper-heading-home text-center">
            <div class="container-fluid">
                <div class="classify" data-aos="fade-up">
                    <h2>
                        <a href="">Sản phẩm bán chạy</a>
                    </h2>
                </div>
            </div>
        </div>
        <div class="wraper-conllection">
            <div class="container-fluid">
                <div class="row" height: auto;">
                    <div class="content-product-list">

                        <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                            <div class="product-img">
                                <a class="image" href="" title="ĐẦM ZELDA">
                                    <picture>
                                        <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                    </picture>
                                </a>
                                <div class="button-add product-quick-wiew">
                                    <button type="submit" title="Mua ngay" class="action" onclick="">
                                        <span>Mua ngay</span>
                                        <i class="bi bi-cart-fill"></i>
                                    </button>
                                    <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                        <span>Xem chi tiết</span>
                                        <i class="bi bi-eyeglasses"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="product-detail">
                                <div class="pro-name">
                                    <div class="box-detail">
                                        <p style="font-weight: 500;">ĐẦM ZELDA</p>
                                    </div>
                                </div>

                                <div class="pro-prices">
                                    <span>
                                        270,000đ
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                        <div class="product-img">
                            <a class="image" href="" title="ĐẦM ZELDA">
                                <picture>
                                    <img src="IMAGES/DAM_ZELDA.webp" alt="">
                                </picture>
                            </a>
                            <div class="button-add product-quick-wiew">
                                <button type="submit" title="Mua ngay" class="action" onclick="">
                                    <span>Mua ngay</span>
                                    <i class="bi bi-cart-fill"></i>
                                </button>
                                <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                    <span>Xem chi tiết</span>
                                    <i class="bi bi-eyeglasses"></i>
                                </button>
                            </div>
                        </div>

                        <div class="product-detail">
                            <div class="pro-name">
                                <div class="box-detail">
                                    <p style="font-weight: 500;">ĐẦM ZELDA</p>
                                </div>
                            </div>

                            <div class="pro-prices">
                                <span>
                                    270,000đ
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li" ">
                                    <div class=" product-block">
                    <div class="product-img">
                        <a class="image" href="" title="ĐẦM ZELDA">
                            <picture>
                                <img src="IMAGES/DAM_ZELDA.webp" alt="">
                            </picture>
                        </a>
                        <div class="button-add product-quick-wiew">
                            <button type="submit" title="Mua ngay" class="action" onclick="">
                                <span>Mua ngay</span>
                                <i class="bi bi-cart-fill"></i>
                            </button>
                            <button type="submit" title="Xem chi tiết" class="action" onclick="">
                                <span>Xem chi tiết</span>
                                <i class="bi bi-eyeglasses"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product-detail">
                        <div class="pro-name">
                            <div class="box-detail">
                                <p style="font-weight: 500;">ĐẦM ZELDA</p>
                            </div>
                        </div>

                        <div class="pro-prices">
                            <span>
                                270,000đ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="wiew-more-prod text-center">
            <a class="buttum btn-home-wiew-more" href="">
                Xem thêm
            </a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <div class="wraper-home-banner">
        <div class="clearf">
            <div class="banner-main">
                <div class="home-banner">
                    <div class="block-banner">
                        <a href="" class="link-banner">
                            <img src="IMAGES/banner_home1.webp" alt="">
                        </a>
                        <div class="btn-banner">
                            <h3>Sản phẩm của chúng tôi</h3>

                            <a class="btn-link-banner" href="">
                                <span></span><span></span><span></span><span></span>
                                Click to see more
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home-banner">
                    <div class="block-banner">
                        <a href="" class="link-banner">
                            <img src="IMAGES/banner-home2.webp" alt="">
                        </a>
                        <div class="btn-banner">
                            <h3>Sản phẩm của chúng tôi</h3>
                            <a class="btn-link-banner" href="">
                                <span></span><span></span><span></span><span></span>
                                Click to see more
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home-banner">
                    <div class="block-banner">
                        <a href="" class="link-banner">
                            <img src="IMAGES/banner_home3.webp" alt="">
                        </a>
                        <div class="btn-banner">
                            <h3>Sản phẩm của chúng tôi</h3>
                            <a class="btn-link-banner" href="">
                                <span></span><span></span><span></span><span></span>
                                Click to see more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-collection">
        <div class="heading-bottom-main">
            <div class="text-center">
                <div class="container-fuild">
                    <h2 id="heading">
                        <a href="">Gợi ý cho bạn</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    </div>

    <footer class="footer mainfooter-bottom-main">
        <div class="topfooter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="area_newsletter">
                            <div class="title_newsletter">
                                <i class="bi bi-envelope-paper-fill"></i>
                                <h2>Đăng ký nhận tin</h2>
                            </div>
                            <div class="form_newsletter">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Nhập email của bạn">
                                    </div>
                                    <button type="submit" class="btn-email">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <div class="area_phone_contact">
                            <p class="number_phone">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Hỗ trợ / Mua hàng:</span>
                                <a href="tel:082 3304 717">
                                    082 3304 717
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer">
            <div class="container-fluid">
                <div class="footer-list">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg">
                        <div class="footer-col-1 footer-content1">
                            <h4 class="footer-title">
                                Giới thiệu
                            </h4>
                            <div class="footer-content">
                                <div class="logo-footer">
                                    <a href="https://www.facebook.com/MieuFashionista/" target="_blank" rel="nofollow noreferrer">
                                        <img src="IMAGES/logo-s&w.svg" alt="Bộ Công Thương">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-2 col-lg">
                        <div class="footer-col footer-block">
                            <h4 class="footer-title">
                                Liên kết
                            </h4>
                            <div class="footer-content toggle-footer">
                                <ul>

                                    <li class="item">
                                        <a href="/search" title="Tìm kiếm">Tìm kiếm</a>
                                    </li>

                                    <li class="item">
                                        <a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a>
                                    </li>

                                    <li class="item">
                                        <a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                                    </li>

                                    <li class="item">
                                        <a href="/pages/dieu-khoan-dich-vu" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                        <div class="footer-col">
                            <h4 class="footer-title">
                                Thông tin liên hệ
                            </h4>
                            <div class="footer-content footer-contact">
                                <ul>
                                    <li class="contact-1">102 Trần Quang Diệu, Phường 14, Quận 3, TP. Hồ Chí MInh</li>
                                    <li class="contact-2">090 6996 700</li>
                                    <li class="contact-3"></li>
                                    <li class="contact-4">hello@mieu.com.vn</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg">
                        <div class="footer-col">
                            <h4 class="footer-title">
                                Facebook
                            </h4>
                            <ul>
                                <li>
                                    <a id="link-facebook" href="https://www.facebook.com/profile.php?id=100020145759701" style="text-transform: capitalize;">Slipper end Worm</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer text-center">
            <div class="container-fluid">
                <p>Copyright © 2022 <a href=""> sliper & worm</a>.</p>
            </div>
        </div>
    </footer>



</body>

</html>