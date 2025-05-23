<?php
session_start();
$errors = array("username" => "", "password" => "", "total" => "");
$pattern = "/^[a-zA-Z\w]+$/";


// check submit isset
if (isset($_POST['submit'])) {

    // check username is empty
    if (empty($_POST['username'])) {
        $errors['username'] = "Username is empty!";
    } 
    else {
        $username = $_POST['username'];
        if (!preg_match($pattern, $username)) {
            $errors['username'] = "Username must be only alpha-numeric characters!";
        }
    }

    // check password is empty
    if (empty($_POST['password'])) {
        $errors['password'] = "Password is empty!";
    } 
    else {
        $password = $_POST['password'];
        if (!preg_match($pattern, $password)) {
            $errors['password'] = "Password must be only alpha-numeric characters!";
        }
    }
    

    if (array_filter($errors)) {
        $errors['total'] = 'there are some errors on your form! please try again!';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: login.php");
    }
}

?>

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

    <?php include("header.php"); ?>

    <div class="signupLogin">
        <form method="POST">
            <h1>SignUp</h1>

            <label for="username">Username or Email Address</label>
            <?php if (empty($errors['username'])){ ?>
                <input type="text" name="username">
            <?php } else{ ?>
                <input class="error" type="text" name="username">
                <p class="error"><?php echo($errors['username']) ?></p>
            <?php } ?>

            <label for="password">Password</label>
            <?php if (empty($errors['password'])){ ?>
                <input type="password" name="password">
            <?php } else{ ?>
                <input class="error" type="password" name="password">
                <p class="error"><?php echo($errors['password']) ?></p>
            <?php } ?>


            <label for="remember">Remember Me <input type="checkbox" name="remember"></label>

            <input type="submit" name="submit" value="Signup">

            <span>Do you have account? <a href="./login.php">Login</a></span>
        </form>

    </div>

    <?php include("footer.php"); ?>
</body>

</html>