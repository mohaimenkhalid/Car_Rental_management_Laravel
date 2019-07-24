<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="html 5 template">
    <meta name="author" content="tonytemplates.com">
    <link rel="shortcut icon" href="{{ asset('/icon-images/') }}/favicon.ico" type="image/x-icon">

    <title>
        @yield('title')
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/front/') }}/css/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/front/') }}/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link href="{{ asset('/front/') }}/css/plugins/nivo-slider.css" rel="stylesheet">
    <link href="{{ asset('/front/') }}/css/plugins/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('/front/') }}/css/plugins/intlTelInput.min.css" rel="stylesheet" >
    <link href="{{ asset('/front/') }}/css/plugins/remodal.min.css" rel="stylesheet" >
    <link href="{{ asset('/front/') }}/css/plugins/animate.css" rel="stylesheet">
    <link href="{{ asset('/front/') }}/css/main-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Icon Font-->
    <link href="iconfont/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body class="page__home">
<div class="tools">
    <span class="toggle"><img src="{{ asset('/front/') }}/images/color-icon.png" class="img-responsive" alt=""></span>
    <a href="#" class="color-pink">Pink</a>
    <a href="#" class="color-yellow">Yellow</a>
    <a href="#" class="color-turquoise">Turquoise</a>
    <a href="#" class="color-orange">Orange</a>
    <a href="#" class="color-orange-sec">Orange-second</a>
    <a href="#" class="color-lightblue">Lightblue</a>
    <a href="#" class="color-blue">Blue</a>
</div>
<!-- Loader -->
<div class="plash">
    <div id="scene">
        <span></span>
        <div id="road">
            <div id="stripes"></div>
        </div>
    </div>
    <div class="loading">Loading<span>...</span></div>
</div>
<!-- //Loader -->
<!-- Header -->
<header class="site-header">
    <div class="mobile-top-panel"></div>

    @include('front.includes.header')

</header>
<!-- // Header -->
<!-- Content  -->
<main id="page-content">

    <!-- Slider -->

    <div class="slider-wrapper theme-default">
        @yield('image-slider')
    </div>

    <!-- Slider -->
    </br>
    <div class="book-form-box">
        @yield('book-car-here')
    </div>

    <div class="parallax_box"/>

        <div class="container">
            @yield('content')
        </div>


    </div>

    <div class="services-box">


            @yield('container')
            <!-- // box-list-posts  -->
    </div>

    <div class="container">

        @yield('container-2')

    </div>


    <section class="carousel-models_fullwidth">

        @yield('fleet')

    </section> <!-- // Full width carousel  -->



    {{--<section class="service-info-box">--}}

        {{--@yield('Featured-Services')--}}

    {{--</section>--}}


    {{--<section class="testimonials-carousel_box">--}}
        {{--<div class="container">--}}
        {{--@yield('clients')--}}
        {{--</div>--}}
    {{--</section>--}}


    <section class="blog-posts-carousel">
        @yield('blog')
    </section>

    <div class="container">

        @yield('container-3')

    </div>

    <section class="car-info-box" data-wow-duration="1s" data-wow-delay="1s">

        @yield('car-hire')

    </section>


</main>
<!-- // Content  -->
<!-- Footer -->
   <footer class="site-footer">

       @include('front.includes.footer')

   </footer>

<div class="remodal" data-remodal-id="modal">
    <!-- // order-details-form  -->
    <form action="#" class="order-details-form" name="contactform" method="post" novalidate>
        <div class="inner-form">
            <h3>Order Form</h3>
            <div class="inner-form__elements">
                <div class="inner-half">
                    <h5>New Reservation</h5>
                    <div class="location">
                        <input type="text" name="location" placeholder="Your pickup location">
                        <i class="icon-placeholder-for-map"></i>
                    </div>
                    <div class="text-element stop-location">
                        <a href="#" class="add" id="add-stop"><i class="icon-plus-black-symbol"></i> <span>Click here to add a stop</span></a>
                        <a href="#" class="link-right">airports</a>
                    </div>
                    <div class="location-drop-off">
                        <input type="text" name="location-drop-off" placeholder="Enter drop-off location">
                        <i class="icon-placeholder-for-map"></i>
                    </div>
                    <div class="text-element checkbox-div">
                        <div class="wishes">
                            <input type="checkbox" name="option1" value="a1"> I would like the driver to wait and take me back<br>
                            <input type="checkbox" name="option2" value="a2"> I would like to go by the hours
                        </div>
                        <a href="#" class="link-right">airports</a>
                    </div>

                    <div class="inner-half__width">
                        <div class="input-date">
                            <input type="text" name="input-date" placeholder="Pick-up date">
                            <i class="icon-calendar-with-a-clock-time-tools"></i>
                        </div>
                        <div class="input-time">
                            <input type="text" name="input-time" placeholder="Pick-up time">
                            <i class="icon-clock"></i>
                        </div>
                    </div>
                    <div class="inner-half__width">
                        <div class="input-date">
                            <input type="text" name="input-date" placeholder="Drop-off date">
                            <i class="icon-calendar-with-a-clock-time-tools"></i>
                        </div>
                        <div class="input-time">
                            <input type="text" name="input-time" placeholder="Drop-off time">
                            <i class="icon-clock"></i>
                        </div>
                    </div>

                    <div class="select-vehicle">
                        <select name="select-vehicle">
                            <option value="Vehicle class">Vehicle class</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="passengers-luggage">
                        <div class="passengers">
                            <span>Passengers*</span>
                            <select name="passengers">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="luggage">
                            <span>Luggage*</span>
                            <select name="luggage">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="carseat">
                            <span></span>
                            <input type="checkbox" name="carseat" value="a2"> Car Seat
                        </div>
                    </div>
                </div>
                {{--<div class="inner-half">--}}
                    {{--<h5>Passenger's Contact Info</h5>--}}
                    {{--<div class="inner-half__width">--}}
                        {{--<div class="first-name">--}}
                            {{--<input type="text" name="first-name" placeholder="First Name*">--}}
                        {{--</div>--}}
                        {{--<div class="last-name">--}}
                            {{--<input type="text" name="last-name" placeholder="Last Name*">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="inner-half__width">--}}
                        {{--<div class="your-phone">--}}
                            {{--<input type="tel" id="phone" placeholder="Your phone">--}}
                        {{--</div>--}}
                        {{--<div class="email">--}}
                            {{--<input type="text" name="email" placeholder="E-mail">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="specialreguests">--}}
                        {{--<textarea name="specialreguests" placeholder="Special Requests"></textarea>--}}
                        {{--<span class="textarea-text">(Maximum characters: 250. You have 250 characters left)</span>--}}
                    {{--</div>--}}
                    {{--<div class="payment">--}}
                        {{--<span>Payment</span>--}}
                        {{--<select name="your-phone">--}}
                            {{--<option value="Pay with Cash">Pay with Cash</option>--}}
                            {{--<option value="PayPal">PayPal</option>--}}
                            {{--<option value="1">1</option>--}}
                            {{--<option value="2">2</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <button type="submit" class="btn">CONTINUE</button>
        </div>
    </form>
    <!-- // order-details-form  -->
</div>

<!-- //Footer -->
<!-- Google map -->
<script src="{{ asset('/front/') }}/js/jquery.1.12.4.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/wow.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/jquery.smartmenus.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/jquery.smartmenus.bootstrap.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/jquery.nivo.slider.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/swiper.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/intlTelInput.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/remodal.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/stickup.min.js"></script>
<script src="{{ asset('/front/') }}/js/plugins/tool.js"></script>
<script src="{{ asset('/front/') }}/js/custom.js"></script>
</body>

</html>