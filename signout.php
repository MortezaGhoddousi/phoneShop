<?php
session_start();
$_SESSION['username'] = '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logging out...</title>
    <script>
        sessionStorage.removeItem('loggedIn');
        window.location.href = 'index.php';
    </script>
</head>
<body>
    Logging out...
</body>
</html>
