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
<?php
if(isset($_SESSION["errMsg"])) {
    echo "<div id = 'windBack'><div id = 'loginErr'>";
    
    echo "<x onclick = \"closeWindow('windBack')\">&#10006
    <span class = \"tooltip\">Close Window</span>
    </x>";
    
    echo "<h3>Error &#9888</h3>";
    
    echo $_SESSION["errMsg"];
    
    echo "</div></div>";
    $_SESSION["errMsg"] = null;
}
?>
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

                $_SESSION["errMsg"] = "<p>Please fill out the fields.</p>";
                
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