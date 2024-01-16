<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Menara Vokasi</title>

    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap') }}">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">
    
    <!-- Change the asset folder name in the following line -->
    <script src="{{ asset('assetss/js/jquery.min.js') }}"></script>

</head>

<body>
    <div class="wrapper">


        <!-- =========================
        Header 
    =========================== -->
        <header class="header header-transparent">
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container">

                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/resources/AI.png') }}" class="logo-light" alt="logo"
                            style="width: 100px; height: auto;">
                        <img src="{{ asset('assets/images/resources/AI.png') }}" class="logo-dark" alt="logo"
                            style="width: 100px; height: auto;">
                    </a>

                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item  has-dropdown">
                                <a href="index.html" data-toggle="dropdown" class="nav__item-link">Beranda</a>
                            </li>
                            <li class="nav__item ">
                                <a href="index.html" data-toggle="dropdown" class="nav__item-link">Benefit</a>
                            </li>
                            <li class="nav__item ">
                                <a href="index.html" data-toggle="dropdown" class="nav__item-link">Team</a>
                            </li>
                            <li class="nav__item ">
                                <a href="index.html" data-toggle="dropdown" class="nav__item-link">tentang</a>
                            </li>
                            <li class="nav__item ">
                                <a href="{{ route('auth.login') }}" class="nav__item-link">
                                    <i class="icon-user"></i> login
                                </a>
                            </li>

                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->

        <!-- ============================
        Slider
    ============================== -->
        <section class="slider">
            <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
                data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
                <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                    <div class="bg-img"><img src="{{ asset('assetss/images/sliders/2.jpg') }}" alt="slide img">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">Bersiaplah untuk Karirmu di Menara Vokasi</h2>
                                    <p class="slide__desc">Di Menara Vokasi, kami membantu Anda menemukan pekerja
                                        berkualitas yang sesuai dengan perusahaan Anda dan peluang karir impian yang
                                        memajukan Anda.</p>
                                    <a href="{{ route('auth.register') }}" class="btn btn__primary mr-30">Daftar Sebagai
                                        Kandidat</a>
                                    <a href="{{ route('auth.registerUsaha') }}" class="btn btn__white">Daftar Sebagai
                                        Perusahaan</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
                <div class="slide-item align-v-h bg-overlay bg-overlay-gradient">
                    <div class="bg-img"><img src="{{ asset('assetss/images/sliders/1.jpg') }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">Kembangkan Keahlianmu Hanya di Menara Vokasi</h2>
                                    <p class="slide__desc">Menemukan Peluang, Melatih Keahlian, dan Menaklukkan
                                        Tantangan Profesional dengan Penuh Keyakinan</p>
                                    <a href="{{ route('auth.register') }}" class="btn ">Daftar Sebagai
                                        Kandidat</a>
                                    <a href="{{ route('auth.registerUsaha') }}" class="btn ">Daftar Sebagai
                                        Perusahaan</a>
                                </div><!-- /.slide-content -->
                            </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            </div><!-- /.carousel -->
        </section><!-- /.slider -->

        <!-- ========================
      About Layout 4
    =========================== -->
        <section class="about-layout4 pt-130 pb-0">
            <div class="container">
                <div class="row heading">
                    <div class="col-12">
                        <div class="d-flex align-items-center mb-20">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0">Masa Depan Berada di Ujung Jari Anda</h2>
                        </div>
                    </div><!-- /.col-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h3 class="heading__title mb-40">Jembatan Bagi Perusahaan dan Lulusan Vokasi
                        </h3>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <p>Menara Vokasi adalah panggung inovatif yang menghubungkan harapan perusahaan dengan aspirasi
                            lulusan vokasi</p>
                        <p>Sebagai wadah penyatuan, kami mendedikasikan diri untuk mempertemukan kebutuhan perusahaan
                            dengan potensi lulusan vokasi.</p>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="about__img">
                            <img src="{{ asset('assetss/images/sliders/3.jpg') }}" alt="about">
                        </div><!-- /.about-img -->

                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">
                        <ul class="list-items list-items-layout2 list-horizontal list-unstyled d-flex flex-wrap mt-40">
                            <li>Keamanan dan Privasi</li>
                            <li>Notifikasi Lowongan Baru</li>
                            <li>Publikasi Lowongan Pekerjaan</li>
                        </ul>

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.About Layout 4 -->

        <!-- ========================
        Services Carousel
    =========================== -->
        <section class="services-layout2 services-carousel pt-130 bg-gray">
            <div class="container">
                <div class="row heading mb-40">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0">Memimpin Langkah Anda Menuju Masa Depan Propesional</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <h3 class="heading__title">Portal Karir yang Peduli pada Lulusan Vokasi</h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <p class="heading__desc">Menara Vokasi hadir sebagai solusi terdepan untuk membantu pelamar
                            mengukir jejak sukses dalam dunia profesional. Sebagai platform inovatif.</p>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 3, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- service item #1 -->
                            <div class="service-item">
                                <div class="service__content">
                                    <div class="service__icon">
                                        <!-- <i class="fal fa-graduation-cap"></i> -->
                                    </div><!-- /.service__icon -->
                                    <h4 class="service__title">Lowongan Khusus<br> Vokasi</h4>
                                    <p class="service__desc">Temukan lowongan pekerjaan yang dirancang khusus untuk
                                        lulusan vokasi. Menara Vokasi menghubungkan Anda dengan perusahaan yang
                                        menghargai keahlian dan pendidikan vokasi Anda. </p>

                                </div><!-- /.service-content -->
                            </div><!-- /.service-item -->
                            <!-- service item #2 -->
                            <div class="service-item">
                                <div class="service__content">
                                    <div class="service__icon">
                                        <!-- <i class="icon-cyberspace"></i> -->
                                    </div><!-- /.service__icon -->
                                    <h4 class="service__title">Pendaftaran yang <br> mudah</h4>
                                    <p class="service__desc">Pendaftaran di Menara Vokasi dilakukan dengan cepat, mudah
                                        dan akan lebih efesien, meminimalkan hambatan bagi pelamar yang ingin segera
                                        memulai pencarian pekerjaan.</p>

                                </div><!-- /.service-content -->
                            </div><!-- /.service-item -->
                            <!-- service item #3 -->
                            <div class="service-item">
                                <div class="service__content">
                                    <div class="service__icon">
                                        <!-- <i class="icon-cloud-computing"></i> -->
                                    </div><!-- /.service__icon -->
                                    <h4 class="service__title">Kerjasama Dengan<br> Industri Terkemuka</h4>
                                    <p class="service__desc">Menara Vokasi menjalin kemitraan dengan
                                        perusahaan-perusahaan industri terkemuka, memberikan peluang lebih besar bagi
                                        pelamar untuk terhubung dengan peluang pekerjaan berkualitas.</p>


                                </div><!-- /.container -->
        </section><!-- /.Services Layout 2 -->

        <!-- ======================
    Features Layout 1
    ========================= -->
        <section class="features-layout1 pb-0">
            <div class="features-bg">
                <div class="bg-img"><img src="assetss/images/backgrounds/14.jpg" alt="background"></div>
            </div>
            <div class="container">
                <div class="row heading heading-light mb-30">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="divider divider-primary mb-20"></div>
                        <h3 class="heading__title">Menciptakan Kemitraan yang Produktif bagi Pertumbuhan Perusahaan
                        </h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="heading__desc">Menara Vokasi adalah wadah unik di mana perusahaan dapat
                                    menemukan lulusan vokasi berbakat untuk memperkuat tim mereka.</p>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <p class="heading__desc">Dengan inovasi dan keberlanjutan sebagai pendorong, kami
                                    memberikan perusahaan akses ke lulusan vokasi berkualitas tinggi yang tidak hanya
                                    memenuhi kebutuhan keterampilan, tetapi juga membawa energi segar dan perspektif
                                    inovatif. </p>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <!-- Feature item #1 -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item text-center " style=" height: 450px;">
                            <div class="feature__icon">
                                <!-- <i class="icon-software"></i> -->
                            </div>
                            <h4 class="feature__title">Akses ke Lulusan Vokasi Berkualitas</h4>
                            <p class="feature__desc">Menara Vokasi menjadi pintu gerbang untuk menemukan lulusan vokasi
                                yang tidak hanya memiliki keahlian teknis, tetapi juga kesesuaian budaya dan nilai yang
                                konsisten dengan perusahaan.</p>

                        </div><!-- /.feature-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- Feature item #2 -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item text-center" style=" height: 450px;">
                            <div class="feature__icon">
                                <!-- <i class="icon-dos"></i> -->
                            </div>
                            <h4 class="feature__title">Kemudahan Proses Rekrutmen</h4>
                            <p class="feature__desc">Pendaftaran dan manajemen pelamar yang mudah dan efisien,
                                meminimalkan waktu dan upaya yang dibutuhkan dalam proses rekrutmen.</p>

                        </div><!-- /.feature-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- Feature item #3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item text-center" style=" height: 450px;">
                            <div class="feature__icon">
                                <!-- <i class="icon-operating-system"></i> -->
                            </div>
                            <h4 class="feature__title">Keamanan Data Terjamin</h4>
                            <p class="feature__desc">Fokus pada keamanan data yang tinggi memberikan kepercayaan kepada
                                perusahaan dalam berbagi informasi dengan aman.</p>

                        </div><!-- /.feature-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- Feature item #4 -->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item text-center" style=" height: 450px;">
                            <div class="feature__icon">
                                <!-- <i class="icon-machine-learning"></i> -->
                            </div>
                            <h4 class="feature__title">Meningkatkan Citra Perusahaan</h4>
                            <p class="feature__desc">Bermitra dengan Menara Vokasi menciptakan citra perusahaan yang
                                progresif, peduli terhadap pendidikan vokasi, dan berkomitmen pada pembangunan karir dan
                                pengembangan bakat.</p>

                        </div><!-- /.feature-item -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
                <div class="row mt-40">
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column justify-content-between">


                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <img src="{{ asset('assetss/images/sliders/4.jpg') }}" alt="banner">

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Features Layout 1 -->

        <!-- =========================== 
      portfolio Grid
    ============================= -->
      <br><br><br>

        <!-- =========================
       Banner layout 5
      =========================== -->
        <section class="banner-layout5 banner-layout5-sticky bg-parallax pt-130 pb-0">
            <!-- <div class="bg-img"><img src="assets/images/banners/9.jpg" alt="background"></div> -->
            <div class="bg-img"><img src="{{ asset('assetss/images/banners/y.jpg') }}" alt="background"></div>
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between pb-80">
                        <div class="heading heading-light mb-50 sticky-top">
                            <div class="divider divider-white"></div>
                            <h3 class="heading__title mb-30">Dari Impian hingga Kenyataan, Kisah Inspiratif di Balik
                                Jembatan Karir.
                            </h3>
                        </div><!-- /.heading -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <div class="contact__icon"><i class="icon-map-marker"></i></div>
                                    <ul class="contact__list list-unstyled">
                                        <li>Jl.Panglima Minal, Air Putih, Bengkalis</li>
                                    </ul>
                                </div><!-- /.contact-item-->
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6">
                                <div class="contact-item">
                                    <div class="contact__icon"><i class="icon-mail"></i></div>
                                    <ul class="contact__list list-unstyled">
                                        <li><a href="mailto:SmartData@7oroof.com">Email: menaravokasi@gmail.com</a>
                                        </li>
                                        <li><a href="tel:5565454117">Phone: +62 822 8344 7725</a></li>
                                    </ul>
                                </div><!-- /.contact-item-->
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6"></div><!-- /.col-sm-6 -->
                        </div><!-- /.row-->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">

                        <div class="semi-banner bg-gray">
                            <div class="row row-no-gutter">
                                <div class="col-sm-6">
                                    <div class="semi-banner__content">
                                        <div class="heading">
                                            <h3 class="heading__title mb-30">Merintis Kisah Sukses dari Dibalik
                                                Layar
                                            </h3>
                                            <p class="heading_desc mb-30">Menara Vokasi lahir dari visi yang kuat
                                                untuk
                                                mengatasi kesenjangan antara lulusan vokasi dan peluang karir yang
                                                sesuai. </p>
                                            <p class="heading_desc mb-30">Ide ini muncul dari pengamatan bahwa
                                                banyak
                                                lulusan vokasi memiliki potensi besar, namun sering kali menghadapi
                                                kesulitan untuk menemukan pekerjaan yang sesuai dengan keahlian
                                                mereka.
                                            </p>
                                        </div><!-- /.heading -->
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6 d-none d-md-block">
                                    <img src="{{asset('assetss/images/banners/z.jpg') }}" alt="banner" class="w-100">
                                </div><!-- /.col-sm-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.semi-banner -->
                        <div class="semi-banner bg-gray">
                            <div class="row row-no-gutter">
                                <div class="col-sm-6">
                                    <div class="cta-banner bg-primary">
                                        <div class="cta__icon color-white"><i class="icon-developer"></i></div>
                                        <h4 class="cta__title color-white">Since 2023</h4>
                                        <p class="cta__desc color-white mb-25">Menara Vokasi menjadi penyemangat
                                            bagi
                                            lulusan vokasi, membangun jalan menuju sukses karir dengan peluang yang
                                            menarik dan berkelanjutan.</p>
                                    </div>
                                </div><!-- /.col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="semi-banner__content pb-0">

                                        <p class="heading_desc">Perjalanan dimulai dengan penelitian mendalam
                                            tentang
                                            tantangan yang dihadapi lulusan vokasi dan harapan perusahaan. Dengan
                                            pemahaman ini, Menara Vokasi dirancang untuk menjadi tempat di mana
                                            bakat
                                            bertemu peluang, dan di mana perusahaan dapat menemukan karyawan
                                            berbakat
                                            yang sesuai dengan kebutuhan mereka.</p>

                                    </div>
                                </div><!-- /.col-sm-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.semi-banner -->

                    </div><!-- /.col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Banner layout 5 -->

        <!-- ======================
   
      Footer
    ========================== -->
        <footer class="footer footer-light">
            <div class="footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
                            <div class="footer-widget__content">
                                <img src="{{ asset('assets/images/resources/AI.png') }}" alt="logo" class="mb-30"
                                    style="width: 100px;">
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-xl-3 -->
                        <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                            <h6 class="footer-widget__title">Tautan Cepat</h6>
                            <div class="footer-widget__content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="about-us.html">Beranda</a></li>
                                        <li><a href="leadership-team.html">Keunggulan</a></li>
                                        <li><a href="blog.html">Team</a></li>
                                        <li><a href="projects-grid.html">Tentang</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-sm-6 col-md-4 col-lg-3 footer-widget footer-widget-nav">
                            <h6 class="footer-widget__title">Informasi Kontak</h6>
                            <div class="footer-widget__content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Telepon : +62 822 83447725</a></li>
                                        <li><a href="#">Email : menaravokasi@gmail.com</a></li>
                                        <li><a href="#">Alamat : Jl. Panglima Minal, Air Putih, Bengkalis</a></li>
                                    </ul>
                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-lg-2 -->

                        <div class="col-sm-6 col-md-4 col-lg-3 footer-widget footer-widget-nav">
                            <h6 class="footer-widget__title">Motto</h6>
                            <div class="footer-widget__content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Berdayakan Keterampilan, Raih Masa Depan</a></li>
                                    </ul>

                                </nav>
                            </div><!-- /.footer-widget__content -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-primary -->
            <div class="footer-secondary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="footer__copyrights">
                                <span class="fz-14">&copy; 2023 Menara Vokasi, Dibuat Dengan Penuh Cinta Oleh</span>
                                <a class="fz-14 color-primary"
                                    href="http://themeforest.net/user/7oroof">team5puluh.com</a>
                            </div>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                            <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                        </div><!-- /.col-lg-2 -->
                        <div
                            class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->

                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-secondary -->
        </footer><!-- /.Footer -->


    </div><!-- /.wrapper -->
    <script src="assetss/js/jquery-3.5.1.min.js"></script>
    <script src="assetss/js/plugins.js"></script>
    <script src="assetss/js/main.js"></script>
</body>

</html>