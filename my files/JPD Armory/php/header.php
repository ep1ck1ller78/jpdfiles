<?php
session_start();
if ($_SESSION['loggedIn'] == false) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>History</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "./css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./js/scripts.js"></script>
</head>
<body onload = "showUserInfo()">
    
    <div class = "navBar">
        <div class = "userInfo" onclick = "showUserInfo()">
            <i class="far fa-user"></i>
            <p>F.Name L.Name</p>
        </div>
        <div id = "userInfo">
            <div><span  onclick = "showUserInfo()" class = "x">&#10006</span></div>
            <h1>F.Name L.Name</h1>
            <a href = "login.php"><div><button>Log Out</button></div></a>
        
        </div>
        <div class = "navButtonContainer">


            <div class = "navButton">
                <a href="realtime.php"><h1
                <?php
                if ($_SERVER['PHP_SELF'] == '/JPD Armory/realtime.php') {
                    echo "id=\"active-page\"";
                }
                ?>
                >Real Time</h1></a>
            </div>


            <div class = "navButton">
                <a href="history.php"><h1 
                <?php
                if ($_SERVER['PHP_SELF'] == '/JPD Armory/history.php') {
                    echo "id=\"active-page\"";
                }
                ?>
                >History</h1></a>
            </div>


            <div class = "navButton">
                <a href = "equipment.php"><h1 
                <?php
                if ($_SERVER['PHP_SELF'] == '/JPD Armory/equipment.php') {
                    echo "id=\"active-page\"";
                }
                ?>
                >Add Equipment</h1></a>
            </div>


            <div class = "navButton">
                <a href = users.php><h1
                <?php
                if ($_SERVER['PHP_SELF'] == '/JPD Armory/users.php') {
                    echo "id=\"active-page\"";
                }
                ?>
                >Manage Users</h1></a>
            </div>


        </div>
    </div>
    