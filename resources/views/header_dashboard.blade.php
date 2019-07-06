<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Home</title>

    <!-- Font awesome -->
    <link href="{{URL::to('/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::to('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{URL::to('/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/jquery.simpleLens.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{URL::to('/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{URL::to('/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{URL::to('/css/style.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href={{URL::to('https://fonts.googleapis.com/css?family=Lato')}} rel='stylesheet' type='text/css'>
    <link href={{URL::to('https://fonts.googleapis.com/css?family=Raleway')}} rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <!-- start language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="img/flag/english.jpg" alt="english flag">ENGLISH
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a href="#"><img src={{URL::to("img/flag/english.jpg")}} alt="">ENGLISH</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="account.html">My Account</a></li>
                                    <!-- <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                    <li class="hidden-xs"><a href="checkout.html">Checkout</a></li> -->
                                    <li>
                                        @if (!Session::get('username') == null)
                                            <div class="dropdown">
                                                <a class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    {{Session::get('username')}}    
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li>
                                                        <a href="{{URL('/Dashboard/Logout')}}">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href={{URL::to("index.html")}}>
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                                </a>
                                <!-- img based logo -->
                                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox">
                                <!-- <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span class="aa-cart-notify">2</span>
                                </a> -->
                                <div class="aa-cartbox-summary">
                                    <ul>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Product Name</a></h4>
                                                <p>1 x $250</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Product Name</a></h4>
                                                <p>1 x $250</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <span class="aa-cartbox-total-title">
                        Total
                      </span>
                                            <span class="aa-cartbox-total-price">
                        $500
                      </span>
                                        </li>
                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form action="">
                                    <input type="text" name="" id="" placeholder="Search here ex. 'Iphone X' ">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{URL('/Dashboard')}}">Home</a></li>
                            <li><a href="{{URL('/Dashboard/All')}}">Original New Product</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>