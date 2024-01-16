<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form | By Code Info</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            background: rgb(214, 214, 214);
            font-family: verdana, geneva, sans-serif;
        }

        .login-box {
            width: 350px;
            height: 400px;
            background: rgb(214, 214, 214);
            margin: 150px auto;
            border-radius: 10px;
            box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #ffffff;
        }

        img {
            width: 110px;
            height: 110px;
            position: relative;
            top: -50px;
            left: 35%;
        }

        h2 {
            margin: -25px 0 20px 0;
            text-align: center;
            color: #8f8888;
        }

        form {
            margin-left: 40px;
        }

        input {
            display: block;
            width: 80%;
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            outline: none;
            font-family: sans-serif;
            background: transparent;
            font-size: 16px;
            border-radius: 25px;
            text-shadow: 1px 1px 0 #fff;
            box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #fff;
        }

        button {
            width: 87%;
            border: none;
            height: 35px;
            border-radius: 25px;
            background: rgb(82, 182, 221);
            color: white;
            font-size: 20px;
            cursor: pointer;
            box-shadow: -5px -5px 20px rgb(224, 217, 217), 5px 5px 20px #babecc;
            outline: none;
        }

        input:focus {
            box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
        }

        button:active {
            box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
        }

        a {
            margin-left: 32%;
            color: #8f8888;
            font-size: 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <img src="images/icon.png" />
        <h2>Member Login</h2>
        <form>
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" />
            <button>Sign In</button>
        </form>
        <br />
        <a href="#">Forgot Password?</a>
    </div>
</body>

</html>
