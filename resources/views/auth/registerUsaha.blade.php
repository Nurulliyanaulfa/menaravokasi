<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-color: #c9d6ff;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 580px;
    }

    .container p {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 0.3px;
        margin: 20px 0;
    }

    .container span {
        font-size: 12px;
    }

    .container a {
        color: #333;
        font-size: 13px;
        text-decoration: none;
        margin: 15px 0 10px;
    }

    .container button {
        background: linear-gradient(to right, #70c066, #aad459);
        color: #fff;
        font-size: 12px;
        padding: 10px 45px;
        border: 1px solid transparent;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 10px;
        cursor: pointer;
    }

    .container button.hidden {
        background-color: transparent;
        border-color: #fff;
    }

    .container form {
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        height: 100%;
    }

    .container input {
        background-color: #eee;
        border: none;
        margin: 8px 0;
        padding: 10px 15px;
        font-size: 13px;
        border-radius: 8px;
        width: 100%;
        outline: none;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.active .sign-in {
        transform: translateX(100%);
    }

    .sign-up {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.active .sign-up {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: move 0.6s;
    }

    @keyframes move {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .social-icons {
        margin: 20px 0;
    }

    .social-icons a {
        border: 1px solid #ccc;
        border-radius: 20%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 3px;
        width: 40px;
        height: 40px;
    }

    .toggle-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: all 0.6s ease-in-out;
        border-radius: 150px 0 0 100px;
        z-index: 1000;
    }

    .container.active .toggle-container {
        transform: translateX(-100%);
        border-radius: 0 150px 100px 0;
    }

    .toggle {
        /* background: linear-gradient(to right, #70c066, #aad459); */
        background: linear-gradient(to right, #4CAF50, #2E8B57);/
        height: 100%;
        color: #fff;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: all 0.6s ease-in-out;
    }

    .container.active .toggle {
        transform: translateX(50%);
    }

    .toggle-panel {
        position: absolute;
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 30px;
        text-align: center;
        top: 0;
        transform: translateX(0);
        transition: all 0.6s ease-in-out;
    }

    .toggle-left {
        transform: translateX(-200%);
    }

    .container.active .toggle-left {
        transform: translateX(0);
    }

    .toggle-right {
        right: 0;
        transform: translateX(0);
    }

    .container.active .toggle-right {
        transform: translateX(200%);
    }

    .form-group {
        margin: 20px 0;
    }

    .form-group label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
    }


    .form-group select {
        background-color: #eee;
        border: none;
        margin: 0px 0;
        padding: 10px 15px;
        font-size: 13px;
        border-radius: 8px;
        width: 300px;
        /* Sesuaikan nilai ini sesuai kebutuhan desain Anda */
        outline: none;
    }
    </style>
</head>

<body>
    

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form>
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>

        <div class="container mt-3">
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Registrasi Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="form-container sign-in">
        <form action="{{ route('postRegisterUsaha') }}" method="POST">
                @csrf
                <center>
                <h1>Registrasi Perusahaan</h1><br><br>
                
                <input type="text" placeholder="Nama Perusahaan" name="name" value="{{ old('name') 
            }}">
                <span class="text-danger">
                    @error('name')
                    {{ $message }}
                    @enderror
                </span>
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
               
                <input type="password" placeholder="Password" name=" password">
                <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
                <input type="password" placeholder="konfirmasi Password" name="password_confirmation">
                <span class="text-danger">
                    @error('password_confirmation')
                    {{ $message }}
                    @enderror
                </span>
               
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Selamat datang</h1>
                    <h1>dimenara Vokasi!</h1>
                    <p>Temukan bakat terbaik untuk tim anda. Daftar kan perusahaan Anda sekarang dan temukan karyawan berkualitas dengan keahlian vokasi yang dibutuhkan</p>
                    <button class="hidden">
                        <a href="{{ route('auth.login') }}" style="text-decoration: none; color: inherit;">Login</a>
                    </button>

                </div>
            </div>
        </div>
    </div>

</body>

</html>