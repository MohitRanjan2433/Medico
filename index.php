<?php
    session_start();
    if (!isset($_SESSION['status']) || !isset($_SESSION['uname'])) {
        if ($_SESSION['status'] != "ud") {
            header('Location: login.php');
            return;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Logged in as <?= $_SESSION['uname']; ?></p>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>