<?php 
    require_once "pdo.php";
    session_start();
    $_SESSION['status'] = 'ud';
    if (isset($_POST['uname']) && isset($_POST['pass'])) {
        unset($_SESSION['uname']);
        $sql = "SELECT password FROM users WHERE username=:name";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['uname']
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row['password']==md5($_POST['pass'])) {
            print_r($row['password']);
            $_SESSION['uname'] = $_POST['uname'];
            $_SESSION['status'] = 'Logged in';
            header('Location: index.php');
            return;
        } 
        else {
            $_SESSION['status'] = 'Incorrect password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <h2>Medico Login</h2>    
        </div>
        <div class="signin">
            <h1>Welcome!</h1>
            <p>Sign into your account</p>
            <form method="post" action="">
                <label for="uname">Username</label>
                <i class="far fa-user"></i>
                <input type="text" placeholder="Enter your username" name="uname" id="uname">
                <label for="pass">Password</label>
                <i class="far fa-user"></i>
                <input type="password" placeholder="Enter your password" name="pass" id="pass"><br>
                <a href="#">Forget Password ?</a><br>
                <input type="submit" value="Login">
                <br><br>
                <p>Dont have an account? <a target="_blank" href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>

