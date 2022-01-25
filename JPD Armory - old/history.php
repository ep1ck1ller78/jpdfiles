<?php
require("./php/header.php");
?>
    
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
</body>
</html>