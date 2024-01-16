<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>perusahaan</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    /* background: rgb(226, 226, 226); */
    background: linear-gradient(to right, #70c066, #aad459);
}

nav {
    position: sticky;
    top: 0;
    bottom: 0;
    height: 100vh;
    left: 0;
    width: 90px;
    background: #fff;
    overflow: hidden;
    transition: 1s;
}

nav:hover {
    width: 280px;
    transition: 1s;
}

.logo {
    text-align: center;
    display: flex;
    margin: 10px 0 0 10px;
    padding-bottom: 3rem;
}

.logo img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo span {
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
}

a {
    position: relative;
    width: 280px;
    font-size: 14px;
    color: rgb(85, 83, 83);
    display: table;
    padding: 10px;
}

nav .fas {
    position: relative;
    width: 70px;
    height: 40px;
    top: 20px;
    font-size: 20px;
    text-align: center;
}

.nav-item {
    position: relative;
    top: 12px;
    margin-left: 10px;
}

a:hover {
    background: #eee;
}

a:hover i {
    color: #34AF6D;
    transition: 0.5s;
}

.logout {
    position: absolute;
    bottom: 0;
}

.container {
    display: flex;
}

.main {
    position: relative;
    padding: 20px;
    width: 100%;
}

.main-top {
    display: flex;
    width: 100%;
}

.main-top i {
    position: absolute;
    right: 0;
    margin: 10px 30px;
    color: rgb(110, 109, 109);
    cursor: pointer;
}

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

<body>
    <div class="container">
        
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="/img/up.JPG">
                        <span class="nav-item">Admin</span>


                    </a></li>
                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.perusahaan') }}">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Perusahaan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.vokasi') }}">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Vokasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.loker') }}">
                        <i class="fas fa-file"></i> <!-- Corrected icon class -->
                        <span class="nav-item">Postingan</span>
                    </a>
                </li>
                

                <li><a href="{{ route('logout') }}" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
                    </a></li>
            </ul>
        </nav>


        <section class="main">
            <div class="main-top">
                <h1>DATA PERUSAHAAN</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <div class="row mt-5">
                        <div class="col"></div>
                        <div class="col"></div>
                        {{-- <div class="col-2">
                            <a class="btn btn-success" href="{{ route('admin.tambahPerusahaan') }}"
                                style="text-decoration: none; margin-left: 30px">Tambah Data +</a>
                        </div> --}}
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <!-- Pemberitahuan untuk keberhasilan -->
                            @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- Pemberitahuan untuk kegagalan -->
                            @if (Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ Session::get('failed') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <table class="table" style="margin-top: 10px">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($data as $index => $userPerusahaan)
                                    <tr>
                                        <td>{{ $index + $data->firstItem() }}</td>
                                        <td scope="row">{{ $userPerusahaan->name }}</td>
                                        <td>{{ $userPerusahaan->email }}</td>
                                        <td>{{ $userPerusahaan->level }}</td>
                                       
                                            <td>
                                                <!-- Button untuk Unblock -->
                                                <form action="{{ route('admin.unblockUserPerusahaan', ['id' => $userPerusahaan->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Buka Blokir</button>
                                                </form>
                                            
                                                <!-- Button untuk Blokir -->
                                                <form action="{{ route('admin.blokirUserPerusahaan', ['id' => $userPerusahaan->id]) }}">
                                                    @csrf
                                                    <button style="color: red" type="submit" class="btn btn-danger btn-action" onclick="return confirm('Anda yakin ingin memblokir pengguna ini?')">Blokir</button>
                                                </form>
                                            </td>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>