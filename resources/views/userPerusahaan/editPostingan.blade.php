<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit postingan</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap') }}"
        rel="stylesheet">





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



    <div class="container" style="margin-top: 10px">
        <a href="{{ route('userPerusahaan.postingan') }}">

            <i class="bi-arrow-left h1"></i>
        </a>
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade 
show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- Perbaiki pesan error yang salah -->
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
        <!--Page Header Start-->

        <!--Page Header End-->

        <style>
            body{
                background-color: #4CAF50;
            }
        .news_details_left {
            text-align: center;
        }

        .comment-form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .comment-form-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            /* Menempatkan form di tengah vertikal halaman */
        }

        .comment-form__btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .comment-form__btn:hover {
            background-color: #2980b9;
        }

        .card-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        </style>
<body>
    

        <!--News detials Start-->
        <section class="news_details">
            <div class="container">
                <div class="comment-form-wrapper">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news_details_left">
                            <div class="comment-form">
                                <h5 class="card-title text-center">Edit Data</h5>
                                <form action="/postEditPostingan/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="file" placeholder="foto" name="foto">
                                                <img class="mt-3" style="width: 100px"
                                                    src="{{ asset('/news_images/' . $data->foto) }}" alt="foto">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="text" placeholder="Posisi yang dibutuhkan" name="posisi"
                                                    required value="{{ $data->posisi }}">
                                                <span class="text-danger">
                                                    @error('posisi')
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_input_box">
                                        <textarea name="persyaratan" placeholder="Tambahkan Persyaratan"
                                            required>{{ $data->persyaratan }}</textarea>
                                        <span class="text-danger">
                                            @error('persyaratan')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="comment_input_box">
                                        <textarea name="deskripsi" placeholder="Tambahkan Deskripsi"
                                            required>{{ $data->deskripsi }}</textarea>
                                        <span class="text-danger">
                                            @error('deskripsi')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Edit Postingan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
        <!--News Details End-->





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