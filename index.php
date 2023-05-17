<?php
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
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/nav.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "nav.php"; ?>
    <section>
        <div class="head flexbox">
            <h1>Get Your Prescriptions Sorted</h1>
            <form method="get" action="meds.php" class="get-med-form flexbox flexrow">
            <input type="text" class="get-med" name="med" placeholder="Enter medication name" required>
            <input type="submit" value="Search Nearby">
            </form>
        </div>
    </section>
    <p>Logged in as <?= $_SESSION['uname']; ?></p>
</body>
</html>