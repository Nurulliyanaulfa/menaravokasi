<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Postingan</title>
   <!-- Bootstrap CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap') }}" rel="stylesheet">

<!-- Css-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/jarallax.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/tolips.css')}}">
<!-- Template styles -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

</head>

<body>
    
    <head>
        <div class="page-wrapper">

            <div class="site-header__header-one-wrap two clearfix">

                <div class="header_top_one two">
                    <div class="container">
                        <div class="header_top_one_inner clearfix">
                            <div class="header_top_one_content_box">
                                <div class="header_top_one_content_box_top clearfix">
                                    <div class="header_top_one_content_box_top_left float-left">

                                    </div>
                                    <div class="header_top_one_content_box_top_right float-right">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <header class="main-nav__header-one two bg-white">
                    <div class="container">
                        <nav class="header-navigation one stricky">
                            <div class="container-box clearfix">
                                <div class="main_nav_header_two_logo float-left clearfix">
                                    <div class="main_nav_header_two_logo_box">
                                        <a href="index.html">
                                        <img src="{{ asset('assets/images/resources/AI.png') }}" alt=""
                                            style="width: 70px; height: auto;">
                                        </a>
                                    </div>
                                </div>
                                <div class="container-box_two float-right clearfix">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="main-nav__left main-nav__left_one float-left">
                                        <a href="#" class="side-menu__toggler">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                        <div class="main-nav__main-navigation two clearfix">
                                            <ul class="main-nav__navigation-box float-left" style="color: #000000;">
                                                <li class="dropdown">
                                                    <a href="{{ route('user.home') }}"
                                                        style="color:  #717580">Beranda</a>

                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ route('user.Postingan') }}" style="color:  #717580">Cari
                                                        Loker</a>

                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ route('user.Riwayat') }}" style="color:  #717580">Riwayat Lamaran</a>

                                                </li>
                                                <li class="dropdown">
                                                    <a href="{{ route('user.profilPelamar') }}"
                                                        style="color:  #717580">Profile</a>
                                                </li>

                                            </ul>
                                        </div><!-- /.navbar-collapse -->
                                    </div>
                                    <div class="main-nav__right main-nav__right_one float-right">
                                        <div class="header_btn_1">
                                            <a href="{{ route('logout') }}" class="thm-btn">Logout</a>
                                        </div>
                                        <div class="icon_cart_box">

                                        </div>
                                        <div class="icon_search_box">
                                            <a href="#" class="main-nav__search search-popup__toggler">
                                                <i class="icon-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
            </div><br><br><br><br><br><br><br>
        </div>
    </head>


    <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">




        <!--About Page Start-->
        <section class="about_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_page_left">
                            <div class="about_page_img">
                                @if ($posting->foto)
                                <img src="{{ asset('news_images/' . $posting->foto) }}" alt="foto">
                                @else
                                No Image
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_page_right">
                            <div class="block-title text-left">
                                <h4>Ayo lakukan Lamaran di Perusahaan Impianmu!</h4>
                                <h2>{{ $posting->posisi }}</h2>
                            </div>
                            <ul class="about_page_list list-unstyled">
                                {{-- <li><i class="fa fa-check"></i>  </li> --}}
                                <i class="fa-solid fa-map-location-dot me-2 text-success"></i>{{ optional($posting->profileusaha)->alamat }}</li><br>
                                <i
                                        class="fa-solid fa-school me-2 text-success"></i>{{ optional($posting->profileusaha)->jenis_bidang_perusahaan }}
                                </li>
                                <br>
                            </ul>
                            <div class="about_page_right_text">
                                <p class="second_text">{{ $posting->persyaratan }}</p>
                                <p class="second_text">{{ $posting->deskripsi }}</p>

                                <!-- Lamar Button -->
                                <a href="{{ route('user.lamar', ['posting' => $posting->id]) }}" class="thm-btn">Lamar
                                    Sekarang</a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->
        <!--Are You Ready Start-->
        <section class="are_you_ready jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/are_you_ready_bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- <div class="are_you_ready_content">
                            <div class="are_you_ready_shape"><img src="assets/images/shapes/are_you_ready_shape.png"
                                    alt=""></div>
                            <h2>Bersedia untuk melakukan <br> Lamaran</h2>
                            <a href="{{ route('user.lamar', ['posting' => $posting->id]) }}" class="thm-btn">lakukan
                                lamaran</a>

                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--Are You Ready End-->


      
  

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-times"></i>
                </span>
                <div class="logo-box">
                    <a href="index.html" aria-label="logo image">
                        <img src="assets/images/resources/logo-2.png" alt="" />
                    </a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container clearfix"></div>
                <!-- /.mobile-nav__container -->
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="icon-message"></i>
                        <a href="mailto:needhelp@polimark.com">MenaraVokasi@gmail.com</a>
                    </li>
                    <li>
                        <i class="icon-phone-call"></i>
                        <a href="tel:666-888-0000">082385272121</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->
            </div>
        </div>
    
    
    
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
       
    
            <!--Site Footer One Start-->
            <footer class="site_footer" style="background-image: url(assets/images/resources/site_footer_top_bg.jpg)">
                <div class="container">
                    <div class="site_footer_one_top">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                                <div class="footer-widget__column footer_widget__about">
                                    <div class="footer_logo">
                                        <a href="index.html"><img src="{{ asset('assets/images/resources/AI.png') }}" alt="" style="width: 100px; height: auto;">
                                </a>
                                    </div>
                                    <div class="footer_widget_about_text">
                                        <p>Berdayakan Keterampilan, Raih Masa Depan</p>
                                    </div>
                                    <div class="footer_call_agent_box">
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="text">
                                            <p>Call Agent</p>
                                            <a href="tel:92-888-000-2222">082385272121</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer_widget__explore clearfix">
                                    <div class="footer-widget__title">
                                        <h3>Explore</h3>
                                    </div>
                                    <ul class="footer_widget__explore_list list-unstyled">
                                        <li><a href="#">Beranda</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Keunggulan</a></li>
                                        <li><a href="#">Tentang</a></li>
                                    </ul>
                                    <ul class="footer_widget__explore_list two list-unstyled">
                                        <li><a href="#"></a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-8 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer_widget__newsletter">
                                    <div class="footer-widget__title">
                                       
                                    </div>
                                    <form action="#" class="footer_form">
                                        <h6 class="footer-widget__title">Informasi Kontak</h6>
                                <div class="footer-widget__content">
                                   
                                       
                                    </form>
                                    <div class="footer_widget__newsletter_bottom">
                                        
                                        <li><a href="#">Telepon : +62 822 83447725</a></li>
                                        <li><a href="#">Email : menaravokasi@gmail.com</a></li>
                                        <li><a href="#">Alamat : Jl. Panglima Minal, Air Putih, Bengkalis</a></li>
                                    
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Site Footer One End-->
    
            <!--Site Footer Bottom Start-->
            <div class="site_footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site_footer_inner">
                                <div class="site_footer_left">
                                    <p>© Copyright 2023 by <a href="#">MenaraVokasi.com</a></p>
                                </div>
                                <div class="site_footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="https://www.instagram.com/menaravokasi.my.id/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Site Footer Bottom End-->
    
    
    
    
        </div><!-- /.page-wrapper -->
    
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    
    
    
    
        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                    <i class="fa fa-times"></i>
                </span>
                <div class="logo-box">
                    <a href="index.html" aria-label="logo image">
                        <img src="{{ asset('assets/images/resources/AI.png') }}" alt="" />
                    </a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container clearfix"></div>
                <!-- /.mobile-nav__container -->
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="icon-message"></i>
                        <a href="mailto:needhelp@polimark.com">MenaraVokasi@gmail.com</a>
                    </li>
                    <li>
                        <i class="icon-phone-call"></i>
                        <a href="tel:666-888-0000">082385272121</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->
            </div>
        </div>
    
    
    
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    
    
    
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
    
    
        <!-- template scripts -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
    
    
    
    </body>
    
    </html>