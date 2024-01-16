<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayatt Lamaran</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
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

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap') }}"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap') }}" rel="stylesheet">
    



    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tolips.css') }}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        .users {
            display: flex;
            width: 100%;
        }

        .card {
            width: 100%;
            margin: 8px;
            background: #fff;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .card h4 {
            text-transform: uppercase;
        }

        .card p {
            font-size: 12px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .per span {
            padding: 5px;
            border-radius: 10px;
            background: rgb(223, 223, 223);
        }

        td {
            font-size: 14px;
            padding-right: 15px;
        }

        .card button {
            width: 100%;
            margin-top: 8px;
            padding: 7px;
            cursor: pointer;
            border-radius: 10px;
            background: transparent;
            border: 1px solid #47A145;
        }

        .card button:hover {
            background: #47A145;
            color: #fff;
            transition: 0.5s;
        }

        .attendance {
            margin-top: 20px;
            text-transform: capitalize;
        }

        .attendance-list {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 15px;
            min-width: 50%;
            overflow: hidden;
            border-radius: 5px 5px 0 0;
        }

        table thead tr {
            color: #fff;
            background: #47A145;
            text-align: left;
            font-weight: bold;
        }

        .table th,
        .table td {
            padding: 12px 15px;
        }

        .table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        .table tbody tr:nth-of-type(odd) {
            background: #f3f3f3;
        }

        .table tbody tr.active {
            font-weight: bold;
            color: #47A145;
        }

        .table tbody tr:last-of-type {
            border-bottom: 2px solid #47A145;
        }

        .table button {
            padding: 6px 20px;
            border-radius: 10px;
            cursor: pointer;
            background: transparent;
            border: 1px solid #4AD489;
        }

        .table button:hover {
            background: #47A145;
            color: #fff;
            transition: 0.5rem;
        }

        .button {
            padding: 6px 20px;
            border-radius: 10px;
            cursor: pointer;
            background: transparent;
            border: 1px solid #4645A3;
            margin-right: 5px;
        }

        .button:hover {
            background: #4645A3;
            color: #fff;
            transition: 0.5s;
        }
    </style>
</head>

<body>
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
                                                <a href="{{ route('user.home') }}" style="color:  #717580">Beranda</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="{{ route('user.Postingan') }}" style="color:  #717580">Cari
                                                    Loker</a>

                                            </li>
                                            <li class="dropdown">
                                                <a href="#" style="color:  #717580">Riwayat Lamaran</a>

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
        </div><br>

        <!--News detials Start-->
  <!--News detials Start-->
<section class="news_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="news_details_left">
                    <div class="news_detials_img_box">
                        <div class="news_detials_img">
                        </div>
                    </div>
                </div>
                <section class="main">
                    <div class="main-top">
                        <form action="{{ route('user.Riwayat') }}" method="GET" class="d-flex">
                            @csrf
                            <br><br>
                        </form>
                    </div>
                    <div class="users">
                        <div class="card"><br>
                            <h2>Riwayat Lamaran</h2>
                            <div class="row mt-5">
                               
                            </div>
                            
          <!-- ... Kode sebelumnya ... -->
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Posisi</th>
                <th scope="col">Ijazah</th>
                <th scope="col">Surat Lamaran</th>
                <th scope="col">Persyaratan Lainnya</th>
                <th scope="col">Status</th>
                <th scope="col">Pembayaran</th>
                <th scope="col">Cetak</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $lamarr)
                <tr>
                    <td>{{ $lamarr->posting->posisi }}</td>
                    <td><a href="{{ asset('storage/' . $lamarr->ijazah) }}" target="_blank">Buka Ijazah</a></td>
                    <td><a href="{{ asset('storage/' . $lamarr->surat) }}" target="_blank">Buka Surat Lamaran</a></td>
                    <td><a href="{{ $lamarr->keterangan }}" target="_blank">Lihat Persyaratan lainnya</a></td>
                    <td>
                        <span class="fw-semibold {{ $lamarr->status === 'sedang diproses' ? 'text-success' : 'text-danger' }}">
                            {{ $lamarr->status }}
                        </span>
                    </td>
                    <td>
                        @if ($lamarr->isDiterima)
                            <a class="button" href="{{ route('user.pembayaran', ['id' => $lamarr->id]) }}">Konfirmasi Pembayaran</a>
                        @elseif ($lamarr->status === 'Lamaran selesai')
                            <i class="far fa-check-circle text-success"></i>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if ($lamarr->status === 'Lamaran selesai' && $lamarr->suratpemanggilan)
                            <a href="{{ asset('storage/' . $lamarr->suratpemanggilan) }}" target="_blank">
                                <i class="fa fa-print"></i>
                            </a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- ... Kode setelahnya ... -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


    </div>
    </div>
    </div>
    <!--News Details End-->
 

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