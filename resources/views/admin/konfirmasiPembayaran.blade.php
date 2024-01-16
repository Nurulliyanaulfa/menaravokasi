<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('assetss/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">

    <style>
        /* Style for the input file */
        .form-group input[type="file"] {
            display: none;
            /* Hide the default file input */
        }

        /* Style for the custom file input container */
        .form-group {
            position: relative;
        }

        /* Style for the custom file input label */
        .form-group label {
            background-color: #4CAF50;
            /* Green color */
            color: #fff;
            /* White text color */
            padding: 10px 15px;
            /* Adjust padding as needed */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Change cursor to pointer on hover */
            display: inline-block;
        }

        /* Hover effect for the custom file input label */
        .form-group label:hover {
            background-color: #45a049;
            /* Darker green color on hover */
        }

        /* Style for the file name display */
        .file-name {
            margin-top: 10px;
        }

        /* Style for the input file in hover state */
        .form-group:hover input[type="file"] {
            background-color: #45a049;
            /* Darker green color on hover */
            color: #fff;
            /* White text color on hover */
        }
        body {
        margin: 0;
        height: 100%;
        overflow: hidden; /* Hide the default body overflow */
    }

    html, body {
        background-color:  #45a049; /* Change this to your desired green color */
    }
    </style>

</head>

<body>

    <!-- alert benar or salah  -->
    <div class="container mt-3">
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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

    <!-- end alert -->
    <div class="wrapper">
        <section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
            <div class="bg-img"><img src="{{ asset('assets/images/banners/5.jpg') }}" alt="background"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner d-flex flex-column justify-content-between">
                        <div>
                           
                            </div><!-- /.heading -->
                        </div>

                    </div><!-- /.col-xl-6 -->
                    <center>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="contact-panel">
                            <form action="/postKonfirmasiPembayaran/{{ $lamarr->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="contact-panel__title mb-20">Lakukan Konfirmasi</h4><br><br>
                                       
                                    </div> 

                                    <div class="col-12">
                                      
                                        <div class="form-check form-checkinline">
                                            <input class="form-check-input" type="radio" name="status"
                                            value="Lamaran selesai" @if ($lamarr->status == 'Lamaran selesai')
                                        checked
                                        @endif>
                                        <label class="form-check-label" for="inlineRadio2">Lamaran selesai</label>
                                            
                                        </div>
                                </div><br><br><br><br><br><br>
                                        <button type="submit" class="btn btn-success btn-xl btn-block" style="width: 100%">Kirim</button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-12 -->
                                </div><!-- /.row -->
                            </form>
                        </div>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Banner layout 1 -->
    </div>


    <script>
        document.getElementById('ijazahInput').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.querySelector('#ijazahFileName').textContent = 'File terpilih: ' + fileName;
        });
    
        document.getElementById('suratInput').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.querySelector('#suratFileName').textContent = 'File terpilih: ' + fileName;
        });
    </script>

    <script src="{{ asset('assetss/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assetss/js/plugins.js') }}"></script>
    <script src="{{ asset('assetss/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>