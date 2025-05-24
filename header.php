<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?v=1.0.1" />
    <link rel="stylesheet" href="style.css?ver=<?php echo filemtime('style.css'); ?>">

    <title>PhoneShop</title>
    <script src="./script.js"></script>
</head>

<body>
    <header>
        <img src="./assets/logo-light.svg" alt="logo" />
        <nav>
            <ul>
                <li class="active"><a href="./index.php">home</a></li>
                <li><a href="./products.php">products</a></li>
                <li><a href="./about-us.php">about us</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">contact us</a></li>
            </ul>
        </nav>
        <ul>
            <li>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                    </svg></a>
            </li>
            <li>
                <a href="#" id="user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg></a>
            </li>
            <!-- <li>
                    <a href="#"><i class="bx bx-shopping-bag"></i></a>
                </li> -->
        </ul>

        <div class="modal">
            <form method="POST">
                <label for="username">Username or Email Address</label>
                <input type="text" name="username">

                <label for="password">Password</label>
                <input type="password" name="password">

                <label for="remember">Remember Me <input type="checkbox" name="remember"></label>

                <input type="submit" name="submit" value="Login">
                <input type="submit" name="submit" value="Signup">
                
                <a href="">Forget Password?</a>
            </form>

        </div>
    </header>