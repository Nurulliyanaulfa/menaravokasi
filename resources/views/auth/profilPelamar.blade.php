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
                            <div class="heading heading-light">
                                <h3 class="heading__title mb-30">Bangun Profil Anda dan Temukan Peluang Karier Terbaik!
                                </h3>
                                <p class="heading__desc mb-30">Selamat datang di Menara Vokasi, wadah di mana setiap
                                    langkah
                                    Anda membuka pintu kesempatan baru. Mohon luangkan waktu sejenak untuk melengkapi
                                    profil
                                    Anda dengan cermat.
                                </p>
                                <div class="testimonials testimonials-wrapper">
                                    <div class="slider-with-navs">
                                        <!-- Testimonial #1 -->
                                        <p class="heading__desc mb-30">Ketika perjalanan terasa sulit,
                                            ingatlah bahwa
                                            setiap
                                            langkah membawa kita lebih dekat pada tujuan. Tetap semangat, karena
                                            keberhasilan
                                            selalu
                                            menunggu di ujung perjalanan.
                                        </p>
                                        <!-- Testimonial #2 -->
                                        <div class="testimonial-item">
                                            <p class="heading__desc mb-30"> Hidup ini penuh dengan tantangan,
                                                tetapi
                                                setiap
                                                tantangan adalah kesempatan untuk tumbuh. Mari kita hadapi hari ini
                                                dengan
                                                semangat
                                                dan
                                                tekad untuk mencapai impian kita!"</p>
                                        </div><!-- /. testimonial-item -->
                                        <!-- Testimonial #3 -->
                                    </div>
                                    <div class="slider-nav">
                                        <div class="testimonial__thumb">
                                        </div><!-- /.testimonial-thumb -->
                                        <div class="testimonial__thumb">
                                        </div><!-- /.testimonial-thumb -->
                                        <div class="testimonial__thumb">
                                        </div><!-- /.testimonial-thumb -->
                                    </div><!-- /.slcik-nav -->
                                </div>

                                
                            </div><!-- /.heading -->
                        </div>

                    </div><!-- /.col-xl-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="contact-panel">
                            <form action="{{ route('postProfilePelamar') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="contact-panel__title mb-20">Ayo mulai lengkapi profilmu</h4>
                                        <p class="contact-panel__desc mb-30">Isi profilmu dengan sebaik mungkin.</p>
                                    </div> <!-- /.col-12 -->

                                    <!-- gambar -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="fileInput">Foto profil anda</label>
                                            <input type="file" id="fileInput" name="gambar" class="form-control-file">
                                            <span class="text-danger">
                                                @error('gambar')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <span class="file-name"></span>

                                        </div>
                                    </div>


                                    <!-- asal lembaga pendidikan -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="ttl" value="{{ old('ttl') }}">
                                            <span class="text-danger">
                                                @error('ttl')
                                                {{ $message }}
                                                @enderror
                                            </span>

                                        </div>
                                    </div><!-- /.col-lg-6 -->

                                    


                                    <!-- asal lembaga pendidikan -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Asal Lembaga Pendidikan" name="asal_lembaga" value="{{ old('asal_lembaga') }}">
                                            <span class="text-danger">
                                                @error('asal_lembaga')
                                                {{ $message }}
                                                @enderror
                                            </span>

                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Bidang Studi" name="jenjang_pendidikan" value="{{ old('jenjang_pendidikan') }}">
                                            <span class="text-danger">
                                                @error('jenjang_pendidikan')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <select class="form-control" name="jk" id="jk">
                                                <option value="jk">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('jk')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                                            <span class="text-danger">
                                                @error('alamat')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <select class="form-control" name="status" id="status">
                                                <option value="status">Karier Sebelumya</option>
                                                <option value="Sudah memiliki pengalaman kerja">Pernah berkarier
                                                </option>
                                                <option value="Belum memiliki pengalaman kerja">Belum berkarier
                                                </option>
                                            </select>
                                            <span class="text-danger">
                                                @error('status')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-12">
                                   

                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Keahlian Anda" id="keahlian" name="keahlian">{{ old('keahlian') }}</textarea>
                                        </div>
                                        <span class="text-danger">
                                            @error('keahlian')
                                            {{ $message }}
                                            @enderror
                                        </span>


                                        <button type="submit" class="btn btn-success btn-xl btn-block" style="width: 100%">Selesai</button>
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
        document.getElementById('fileInput').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.querySelector('.file-name').textContent = 'File terpilih: ' + fileName;
        });
    </script>

    <script src="{{ asset('assetss/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assetss/js/plugins.js') }}"></script>
    <script src="{{ asset('assetss/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>