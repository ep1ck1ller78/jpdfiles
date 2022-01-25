<?php
session_start();
$_SESSION['loggedIn'] = false;
?>

<!DOCTYPE html>
<html id="login-page">

<head>
    <title>Sign In</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <script type = "text/javascript" src = "./js/scripts.js"></script>
</head>

<body>
    <h1 id="login-title">JPD Armory Database</h1>
    <div id="login-form">
        <h1>Sign in to your account</h1>
        <form method = "POST">
            <input type="text" id="username" name="username" placeholder="Username" /> <br /><br />
            <input type="password" id="password" name="password" placeholder="Password" /> <br /><br /><br />
            <input id="login-submit"  name = "submitBtn" type="submit" value="Sign In" />
    </div>

    <?php
        if (isset($_POST['submitBtn'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (empty($username) || empty($password)) {
                echo "<h1>Please fill out all fields!</h1>";
                if (empty($username)) {
                    echo "<script>showError('username')</script>";
                }
                if (empty($password)) {
                    echo "<script>showError('password')</script>";
                }
            }else{
                $_SESSION['loggedIn'] = true;
                header("Location: realtime.php");
            }
        }
    ?>
</body>

</html>