<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.c
ss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <title>Tambah Data</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  shadow-sm fixed-top" style="background-color: #4645A3;">
        <div class="container ">
            <a class="navbar-brand" href="#"
                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 30px;">MENARA<span
                    style="color: #FED339;"> VOKASI</span></a>

        </div>
    </nav>
    <div class="container" style="margin-top: 100px">
        
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
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tambah Data</h5>
                        <form action="{{ route('postTambahProfile') }}" method="POST">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Foto</label>
                                <input class="form-control" type="file" name="foto">
                                <div class="form-text">Maksimal ukuran gambar berita 5MB</div>
                            </div><br>
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Nama Perusahaan</label>
                                <input type="text" class="form-control border 
border-secondary form-control" name="nama_usaha" required value="{{ old('nama_usaha') }}">
                                <span class="text-danger">
                                    @error('nama_usaha')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Jenis Usaha</label>
                                <input type="text" class="form-control border bordersecondary form-control"
                                    name="jenis" required value="{{ old('jenis') }}">
                                <span class="text-danger">
                                    @error('jenis')
                                    {{ $message }}
                                    @enderror
                                </span>
                            
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Alamat</label>
                                <input type="text" class="form-control border bordersecondary form-control"
                                    name="alamat" required value="{{ old('alamat') }}">
                                <span class="text-danger">
                                    @error('alamat')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Visi dan Misi</label>
                                <textarea class="form-control" name="visi" placeholder="Tulis isi Deskripsi disini...." style="height: 250px" required value="{{ old('visi') }}"></textarea>
                                <span class="text-danger">
                                    @error('visi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Tulis isi Deskripsi disini...." style="height: 250px" required value="{{ old('deskripsi') }}"></textarea>
                                <span class="text-danger">
                                    @error('deskripsi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kontak</label>
                                <input type="text" class="form-control border bordersecondary form-control"
                                    name="kontak" required value="{{ old('kontak') }}">
                                <span class="text-danger">
                                    @error('kontak')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            
                    
                    <button type="submit" class="btn btn-success mt-5">Tambah Data Perusahaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>