<?php
session_start();
$errors = array("username" => "", "password" => "", "total" => "");
$pattern = "/^[a-zA-Z\w]+$/";


if (isset($_POST['submit']) || isset($_POST['submitLogin'])) {

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

    
    $conn = mysqli_connect('localhost', 'admin', 'admin', 'phoneShop');
    if ($conn){
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        if (array_filter($var)){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: index.php");
        } 
    }
}

?>