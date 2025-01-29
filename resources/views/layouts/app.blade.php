<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('/site/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/site/images/favicon.png')}}" />

    <!-- PAGE TITLE HERE -->
    <title>Smart Mans Group</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/fontawesome/css/font-awesome.min.css')}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('/site/css/skin/skin-1.css')}}">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('/site/plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

</head>

<body id="bg">
<div class="page-wraper">
  @include('include-site.header')

    <!-- CONTENT START -->
    <div class="page-content">

        @include('include-site.main-slider')
        <!-- HOW IT WORK SECTION START  -->
        <div class="section-full  p-t80 p-b50 bg-gray">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Консалтинговая компания </h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                </div>
                <!-- TITLE END-->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="wt-box  m-b30 radius-md overflow-hide">
                                <div class="wt-media wt-img-effect wt-img-overlay2">
                                    <a href="#"><img src="{{asset('/site/images/gallery/pic5.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                        <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Corporate Services</a></h4>
                                        <p>Lorem Ipsum is simply dummy text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="wt-box  m-b30 radius-md overflow-hide">
                                <div class="wt-media wt-img-effect wt-img-overlay2">
                                    <a href="#"><img src="{{asset('/site/images/gallery/pic7.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                    <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                        <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Financial Planing</a></h4>
                                        <p>Lorem Ipsum is simply dummy text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="wt-box  m-b30 radius-md overflow-hide">
                                <div class="wt-media wt-img-effect wt-img-overlay2">
                                    <a href="#"><img src="{{asset('/site/images/gallery/pic4.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-icon-box-wraper  p-a20 left bg-white ">
                                    <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                        <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Business Consulting</a></h4>
                                        <p>Lorem Ipsum is simply dummy text.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- HOW IT WORK  SECTION END -->

        <!-- FINANCIAL SOLUTION SECTION START -->
        <div class="section-full p-t80 p-b50 overlay-wraper bg-cover bg-no-repeat"  style="background-image:url({{asset('/site/images/background/bg6.jpg')}});">
            <div class="overlay-main bg-white opacity-0"></div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-box m-b30">
                            <div class="wt-thum-bx wt-img-effect  overlay-wraper overflow-hide radius-md wt-img-overlay2">
                                <div class="overlay-main bg-black opacity-02 "></div>
                                <img src="{{asset('/site/images/gallery/pic3.jpg')}}" alt="">
                                <a class="mfp-video video-play-btn" href="video/1.mp4">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="wt-box m-b30">
                            <span class="site-text-primary display-block title-second font-20 display-block m-b15">What are you looking for?</span>
                            <h2 class="text-uppercase display-block m-b15 m-t0 text-white">We are your financial solution</h2>
                            <p class="m-b15 text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, no when an unknown printer took a galley of
                                type and scrambled it to make a type onis specimen book.Lorem Ipsum has been the industry's standard dummy text ever is a since the 1500s, no when an unknown printer took.</p>
                            <ul class="list-check-circle primary m-b15">
                                <li class="text-white">Simply dummy text of the Lorem Ipsum is printing and type setting. </li>
                                <li class="text-white">Dummy text of the printing and typesetting industry. Text of the printing</li>
                                <li class="text-white">And typesetting industry Lorem Ipsum has been. Ipsum has been the </li>
                            </ul>
                            <a href="services-detail.html" class="site-button">Связаться</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- FINANCIAL SOLUTION SECTION START -->

        <!-- FEATURED CASES SECTION START -->


        <!-- FEATURED CASES SECTION END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full bg-white">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-6 col-md-12 bg-cover equal-col-height" style="background-image:url({{asset('/site/images/background/bg12.jpg')}})">
                        <div class="section-content">
                            <div class="wt-left-part">
                                &nbsp;
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="section-content  clearfix">
                            <div class="wt-right-part-2  p-t87 p-b87">
                                <div class="row no-col-gap">
                                    <div class="col-md-6 col-sm-6 bg-gray hover-shadow">
                                        <div class="wt-icon-box-wraper  p-a30">
                                            <div class="icon-md site-text-primary radius m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="flaticon-businessman"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte text-uppercase m-b5">Financial Planning</h4>
                                                <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 bg-gray-light hover-shadow">
                                        <div class="wt-icon-box-wraper   p-a30">
                                            <div class="icon-md site-text-primary radius m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="flaticon-building"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte text-uppercase m-b5">Startup Investment</h4>
                                                <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  bg-gray-light hover-shadow">
                                        <div class="wt-icon-box-wraper  p-a30">
                                            <div class="icon-md site-text-primary radius m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="flaticon-analytics"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte text-uppercase m-b5">Risk Analysis</h4>
                                                <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6  bg-gray hover-shadow">
                                        <div class="wt-icon-box-wraper  p-a30">
                                            <div class="icon-md site-text-primary radius m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="flaticon-bar-chart"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte text-uppercase m-b5">Market Monitoring</h4>
                                                <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- SECTION CONTENT  END -->

        <!-- OUR TEAM MEMBER SECTION START -->
        <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
            <div class="container">

                <!-- TITLE START-->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Best team</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator site-bg-primary"></div>
                    </div>
                </div>
                <!-- TITLE END-->

                <div class="section-content">


                </div>
            </div>
            <!-- OUR TEAM MEMBER SECTION END -->

            <!-- OUR PLANS SECTION START -->

            <!-- OUR PLANS MEMBER SECTION END -->

            <!-- LATEST PROJECT SECTION START -->

            <!-- LATEST PROJECT SECTION END -->

            <!-- MY BLOG SECTION START -->

            <!-- MY BLOG SECTION END -->

            <!-- CONTACT US SECTION END  -->
            <div class="section-full overlay-wraper bg-parallax" data-stellar-background-ratio="0.1" style="background-image:url({{asset('/site/images/background/bg4.jpg')}});">
                <div class="overlay-main bg-black opacity-08"></div>
                <div class="container">

                    <div class="row conntact-home">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="contact-home1-left">
                                <div class="section-content p-lr30 p-tb30 site-bg-primary">
                                    <div class="call-back-form p-b30 p-t15" style="z-index:1; position:relative">
                                        <h2 class="text-white m-t0"  style="font-family: 'Crete Round', serif;"><i>Оставьте заявку</i></h2>
                                        <form  class="cons-contact-form2 form-transparent" method="post" action="form-handler2.php">
                                            <div class="form-group">
                                                <input name="username" type="text" required class="form-control" placeholder="Имя">
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control" required placeholder="Телефон">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" rows="4" placeholder="Написать"></textarea>
                                            </div>
                                            <button type="submit" class="site-button-secondry radius-sm">
                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">Написать</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12" >
                            <div class="p-t60 p-b40">
                                <div class="section-content  contact-home1-right">

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                            <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                                <div class="icon-md m-b15">
                                                    <span class="icon-cell  site-text-primary"><i class="fa fa-map"></i></span>
                                                </div>
                                                <div class="icon-content text-white">
                                                    <h4 class="wt-tilte m-b5">Наш адрес </h4>
                                                    <p> 145 N Los Ave, NY </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                            <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                                <div class="icon-md  m-b15">
                                                    <span class="icon-cell  site-text-primary"><i class="fa fa-credit-card"></i></span>
                                                </div>
                                                <div class="icon-content text-white">
                                                    <h4 class="wt-tilte m-b5">Email </h4>
                                                    <p>almuko.m@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                            <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                                <div class="icon-md  m-b15">
                                                    <span class="icon-cell  site-text-primary"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <div class="icon-content text-white">
                                                    <h4 class="wt-tilte m-b5">Телефон</h4>
                                                    <p>+7 707 780 10 11</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                            <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                                <div class="icon-md  m-b15">
                                                    <span class="icon-cell  site-text-primary"><i class="fa fa-skype"></i></span>
                                                </div>
                                                <div class="icon-content text-white">
                                                    <h4 class="wt-tilte m-b5">Skype id</h4>
                                                    <p>almuko</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- CONTACT US OFFER SECTION END  -->

            <!-- TESTIMONIAL SECTION START -->

            <!-- TESTIMONIAL SECTION END -->

            <!-- OUR CLIENT SLIDER START -->
            <div class="section-full bg-gray">
                <div class="container">

                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel owl-btn-vertical-center">

                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo1.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo2.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo3.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo4.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo5.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo6.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo1.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo2.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo3.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo4.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo5.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 -->
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('/site/images/client-logo/logo6.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>

            </div>
            <!-- OUR CLIENT SLIDER END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_about text-white">
                                <h4 class="widget-title">
                                    О компании</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{asset('/site/images/logo-1.png')}}" width="171" height="49" alt=""/></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur varient adipiscing elit, sed do eiusmod tempor is there incididunt ut labore et dolore. morem isa ipsum dolor sit amet, consectetur adipisc ing elit.</p>
                                <ul>
                                    <li> <i class="fa fa-phone site-text-primary"></i> <b class="p-lr5">Tel:</b> +7 707 780 10 11 </li>
                                    <li><i class="fa fa-envelope site-text-primary"></i> <b  class="p-lr5">Email:</b>almuko.m@gmail.com </li>
                                    <li><i class="fa fa-location-arrow site-text-primary"></i> <b  class="p-lr5">Адрес:</b> Валиханова 47, AL</li>
                                </ul>
                            </div>
                        </div>
                        <!-- RESENT POST -->

                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services text-white">
                                <h4 class="widget-title">Ссылки</h4>
                                <ul>
                                    <li><a href="about-1.html">О нас</a></li>
                                    <li><a href="services-1.html">Услуги</a></li>
                                    <li><a href="gallery-grid-1.html">Галерея</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Instagram Feed -->
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_gallery mfp-gallery clearfix">
                                <h4 class="widget-title">Instagram Feed</h4>
                                <ul class="clearfix">
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic1.jpg')}}" class="mfp-link" ><img src="{{asset('/site/images/gallery/thumb/pic1.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic2.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic2.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic3.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic3.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic4.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic4.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic5.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic5.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic6.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic6.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic7.jpg')}}" class="mfp-link" ><img src="{{asset('/site/images/gallery/thumb/pic7.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-post-thum radius-md overflow-hide">
                                            <a href="{{asset('/site/images/gallery/pic8.jpg')}}" class="mfp-link"><img src="{{asset('/site/images/gallery/thumb/pic8.jpg')}}" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tag-small widget  widget_tag_cloud m-b20">
                                <h4 class="widget-title">Услуги</h4>
                                <div class="tagcloud">
                                    <a href="about-1.html">Trouble </a>
                                    <a href="about-1.html">Programmer</a>
                                    <a href="about-1.html">Never</a>
                                    <a href="about-1.html">Tell</a>
                                    <a href="about-1.html">Doing</a>
                                    <a href="about-1.html">Person</a>
                                    <a href="about-1.html">Between </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NEWSLETTER -->


                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container p-t30">
                    <div class="cpr-ftr-section">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text text-white">© 2025 Complex Services.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right text-white">
                                <li><a href="about-1.html" class="text-white">Terms  & Condition</a></li>
                                <li><a href="about-1.html" class="text-white">Privacy Policy</a></li>
                                <li><a href="contact-1.html" class="text-white">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span></button>

    </div>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->



    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{asset('/site/js/jquery-3.7.1.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset('/site/js/popper.min.js')}}"></script>
    <script src="{{asset('/site/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('/site/js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('/site/js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('/site/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{asset('/site/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('/site/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('/site/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('/site/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
    <script src="{{asset('/site/js/imagesloaded.pkgd.min.js')}}"></script><!-- MASONRY  -->
    <script src="{{asset('/site/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
    <script  src="{{asset('/site/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{asset('/site/js/jquery.owl-filter.js')}}"></script>
    <script src="{{asset('/site/js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   -->
    <script src="{{asset('/site/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->

    <script src="{{asset('/site/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->


    <script  src="{{asset('/site/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script  src="{{asset('/site/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script  src="{{asset('/site/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{asset('/site/js/rev-script-2.js')}}"></script>
</div>

</body>
</html>
