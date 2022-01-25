<!DOCTYPE html>
<html>
<head>
    <title>Add Equipment</title>
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
                <a href="history.php"><h1>History</h1></a>
            </div>
            <div class = "navButton">
                <h1 id="active-page">Add Equipment</h1>
            </div>
            <div class = "navButton">
                <a href="users.php"><h1>Manage Users</h1></a>
            </div>
        </div>
    </div>

    <form>
        <div class="table">
            <table id="table">
                <tr>
                    <th>Name</th>
                    <th>Serial Number</th>
                    <th>Type</th>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                    <td><input type="text" name="serial"></td>
                    <td>
                        <select>
                            <option value="1">-Select item type-</option>
                            <option value="2">Firearm</option>
                            <option value="3">Vehicle</option>
                            <option value="4">Miscellaneous</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button id="equipment-btn">Submit</button>
                        <button id="equipment-btn">Add Row</button>
                    </td> 
                </tr>
            </table>
        </div>
    </form>

    <a href="login.php">(Clickme to "log out")</a>

</body>
</html>