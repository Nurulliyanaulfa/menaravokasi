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
</head>
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

    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;

        /* Set tinggi kontainer sesuai dengan tinggi viewport */
    }
</style>

<body>

    <div class="container" style="margin-top: 10px">
        <a href="{{ route('user.profilPelamar') }}">

            <i class="bi-arrow-left h1"></i>
        </a>
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

        <div class="wrapper">
            <section class="banner-layout1 pt-90 pb-90 bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="container-fluid">
                    <a href="{{ route('user.profilPelamar') }}" class="btn btn-light">
                        <i class="bi-arrow-left"></i> Kembali
                    </a>
                    <div class="row center-content">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mx-auto">
                            <div class="contact-panel">
                                <form action="/postEditProfilePelamar/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                    <!-- Tambahkan input tersembunyi untuk menyimpan nilai id -->
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="contact-panel__title mb-20">Ayo mulai lengkapi profilmu</h4>
                                            <p class="contact-panel__desc mb-30">Isi profilmu dengan sebaik mungkin.</p>
                                        </div> <!-- /.col-12 -->



                                        <!-- gambar -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="fileInput">Foto profil anda</label>
                                                <input type="file" class="form-control-file" name="gambar" id="fileInput">
                                                @if ($data->gambar)
                                                <div class="file-name">File terpilih: {{ $data->gambar }}</div>
                                                @endif
                                                <span class="text-danger">
                                                    @error('gambar')
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div><!-- /.col-lg-6 -->

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nama" id="name" name="name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="ttl" required value="{{ $data->ttl }}">
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
                                                <input type="text" class="form-control" placeholder="Asal Lembaga Pendidikan" name="asal_lembaga" required value="{{ $data->asal_lembaga }}">
                                                <span class="text-danger">
                                                    @error('asal_lembaga')
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Bidang Studi" name="jenjang_pendidikan" required value="{{  $data->jenjang_pendidikan }}">
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
                                                    <option value="Laki-laki" @if ($data->jk == 'Laki-laki')
                                                        selected
                                                        @endif>Laki-laki</option>
                                                    <option value="Perempuan" @if ($data->jk == 'Perempuan')
                                                        selected
                                                        @endif>Perempuan</option>
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
                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required value="{{ $data->alamat }}">
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
                                                    <option value="status">Karier Sebelumnya</option>
                                                    <option value="Sudah memiliki pengalaman kerja" @if ($data->
                                                        status
                                                        == 'Pernah berkarier') selected
                                                        @endif>Pernah berkarier</option>
                                                    <option value="Belum memiliki pengalaman kerja" @if ($data->
                                                        status
                                                        == 'Belum berkarier') selected
                                                        @endif>Belum berkarier</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('status')
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div><!-- /.col-lg-6 -->
                                       

                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Keahlian Anda" id="keahlian" name="keahlian">{{ $data->keahlian }}</textarea>
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
                    </div>
                </div>
            </section>
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