<?php
session_start();
if (isset($_POST['submitLogin'])) {
    include('loginCheck.php');
} else if (isset($_POST['submitSignUp'])) {
    header('Location: signup.php');
}

$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$conn = mysqli_connect('localhost', 'admin', 'admin', 'phoneShop');
if ($conn) {
    $query = "SELECT * FROM goods WHERE userId='$userId'";
    $result = mysqli_query($conn, $query);
    $varUser = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
}


$page = $_SERVER['PHP_SELF'];
$lastPart = basename($page);


?>

<?php
$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;
?>
<script>
    const userId = <?php echo json_encode($userId); ?>;
</script>


<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function showMessage() {
            if (sessionStorage.getItem("loggedIn") === null) {
                window.onload = function() {
                    const message = document.querySelector(".hide");
                    message.style.display = "block";
                    setTimeout(() => {
                        message.style.display = "none";
                    }, 5000);
                };
            }

            sessionStorage.setItem('loggedIn', "true");

            var userIcon = document.querySelector("#user");
            var bagIcon = document.querySelector("#bag");
            userIcon.style.display = "none";
            bagIcon.style.display = "block";

        }
    </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css?ver=<?php echo filemtime('style.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>PhoneShop</title>
    <script src="./script.js?ver=<?php echo filemtime('script.js'); ?>"></script>
</head>

<body>
    <header>
        <img src="./assets/logo-light.svg" alt="logo" />
        <nav>
        <ul>
            <li class="<?= ($lastPart == 'index.php') ? 'active' : '' ?>"><a href="./index.php">home</a></li>
            <li class="<?= ($lastPart == 'products.php') ? 'active' : '' ?>"><a href="./products.php">products</a></li>
            <li class="<?= ($lastPart == 'about-us.php') ? 'active' : '' ?>"><a href="./about-us.php">about us</a></li>
            <li class="<?= ($lastPart == 'blog.php') ? 'active' : '' ?>"><a href="./blog.php">blog</a></li>
            <li class="<?= ($lastPart == 'contact-us.php') ? 'active' : '' ?>"><a href="./contact-us.php">contact us</a></li>
        </ul>

        </nav>
        <ul>
            <li>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                    </svg></a>
            </li>
            <li>
                <a href="" id="user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                    </svg></a>
            </li>
            <li id="bag">
                <span class="badge"><?php echo(sizeof($varUser)); ?></span>
                <a href="./cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"></path>
                    </svg></a>
            </li>
            <form action="signout.php" method="POST">
                <input type="submit" name="signout" id="signout" value="Sign out">
            </form>
        </ul>

        <div class="modal">
            <form method="POST">
                <label for="username">Username or Email Address</label>
                <input type="text" name="username">

                <label for="password">Password</label>
                <input type="password" name="password">

                <label for="remember">Remember Me <input type="checkbox" name="remember"></label>

                <input type="submit" name="submitLogin" value="Login">
                <input type="submit" name="submitSignUp" value="Signup">

                <a href="">Forget Password?</a>
            </form>

        </div>

        <!-- <div id="bagCard">
            <aside>
                <a href="#"><img src="./assets/product-7-500x415.webp" alt="AirPods Pro" /></a>
                <a href="#">
                    <h3>AirPods Pro</h3>
                </a>
                <p>$249.00</p>
                <i class='bx bxs-trash-alt'></i>
            </aside>
            <aside>
                <a href="#"><img src="./assets/product-7-500x415.webp" alt="AirPods Pro" /></a>
                <a href="#">
                    <h3>AirPods Pro</h3>
                </a>
                <p>$249.00</p>
                <i class='bx bxs-trash-alt'></i>
            </aside>
            <div>
                <h2>Subtotal:</h2>
                <span>677.00</span>
                <a href="./cart.php">View cart</a>
                <a href="./cart.php">Checkout</a>
            </div>
        </div> -->
    </header>