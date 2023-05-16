<?php
    session_start();
    session_destroy();
    session_start();
    if (!isset($_SESSION['status']) || !isset($_SESSION['uname'])) {
        header('Location: login.php');
        return;
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
    <p>ABC</p>
</body>
</html>