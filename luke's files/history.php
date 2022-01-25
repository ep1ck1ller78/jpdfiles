<!DOCTYPE html>
<html>
<head>
    <title>History</title>
    <link rel = "stylesheet" type = "text/css" href = "styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <div class = "userInfo"></div> -->
    <div class = "navBar">
        <div class = "navButtonContainer">
            <div class = "navButton">
                <a href="realtime.php"><h1>Real Time</h1></a>
            </div>
            <div class = "navButton">
                <h1 id="active-page">History</h1>
            </div>
            <div class = "navButton">
                <a href="equipment.php"><h1>Add Equipment</h1></a>
            </div>
            <div class = "navButton">
                <a href="users.php"><h1>Manage Users</h1></a>
            </div>
        </div>
    </div>
    
    <div class="table">
        <table id="table">
            <tr>
                <th>Name</th>
                <th>Serial Number</th>
                <th>Type</th>
                <th>Status</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>AK-47</td>
                <td>123456789</td>
                <td>Firearm</td>
                <td id="in">Checked-In</td>
                <td>2/28/2020</td>
                <td>1:23 PM</td>
            </tr>
            <tr>
                <td>Uzi</td>
                <td>123456789</td>
                <td>Firearm</td>
                <td id="out">Checked-Out</td>
                <td>2/22/2020</td>
                <td>8:47 AM</td>
            </tr>
            <tr>
                <td>Glock</td>
                <td>123456789</td>
                <td>Firearm</td>
                <td id="maintenance">Maintenance</td>
                <td>2/18/2020</td>
                <td>12:19 PM</td>
            </tr>
        </table>
    </div>
    <a href="login.php">(Clickme to "log out")</a>
</body>
</html>