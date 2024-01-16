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
/* ... (CSS yang sudah Anda punya) */
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

/* Tambahkan beberapa gaya tambahan untuk menyesuaikan tampilan tabel */
.table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
}

.table thead {
    background-color: #47A145;
    color: #fff;
}

.table th,
.table td {
    padding: 12px 15px;
    text-align: left;
}

.table tbody tr {
    border-bottom: 1px solid #ddd;
}

.table tbody tr:nth-of-type(odd) {
    background: #f3f3f3;
}

.table tbody tr:hover {
    background: #ddd;
}

.table img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

/* ... (CSS yang sudah Anda punya) */
</style>

<body>
    <!-- ... (HTML yang sudah Anda punya) -->
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
                <h1>Data Postingan Loker</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="users">
                <div class="card">
                    <div class="row mt-5">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col-2">
                            <a class="btn btn-success" href="#" style="text-decoration: none; margin-left: 30px">Tambah
                                Data
                                +</a>
                        </div>
                    </div>
                    <!-- Tabel untuk menampilkan postingan -->
                    <!-- Daftar Postingan -->
                    <div class="container mt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Posisi</th>
                                    <th>Persyaratan</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop untuk menampilkan data postingan -->
                                @foreach($data as $post)
                                <tr>
                                    <td>
                                        <img src="{{ asset('news_images/' . $post->foto) }}" alt="Foto">
                                    </td>
                                    <td>{{ $post->posisi }}</td>
                                    <td>{{ $post->persyaratan }}</td>
                                    <td>{{ $post->deskripsi }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <ul class="list-unstyled post-pagination d-flex justify-content-center align-items-center">
                <li><a href="{{ $data->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="{{ $data->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
            </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ... (HTML yang sudah Anda punya) -->
    </div>
</body>

</html>