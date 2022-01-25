<?php
require("./php/header.php");

?>
    <div class="page-heading">
        <h1>Add equipment to the database</h1>
        <p>Administrator accounts can add entries to the database. All new entries will be marked as "Checked-In." For multiple entries, click the "Add Row" button to add
            a row for entry to the table. When all information is correctly entered, click "Submit" to save changes.
        </p>
    </div>

    <form method = 'POST'>
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
                <?php
                    if(!isset($_POST['addRow'])) {
                        $_SESSION["row"]=0;
                    }
                    if(isset($_POST['addRow'])) {
                        $_SESSION['row'] += 1;
                        echo "<h1>".$_SESSION["row"]."</h1>";
                    }
                    if(isset($_POST['submit'])) {
                        $_SESSION['row'] = 0;
                        echo "<h1>".$_SESSION["row"]."</h1>";
                    }
                    for ($i=0; $i < $_SESSION['row']; $i++) {
                        echo "<tr>
                        <td><input type=\"text\" name=\"name\"></td>
                        <td><input type=\"text\" name=\"serial\"></td>
                        <td>
                            <select>
                                <option value=\"1\">-Select item type-</option>
                                <option value=\"2\">Firearm</option>
                                <option value=\"3\">Vehicle</option>
                                <option value=\"4\">Miscellaneous</option>
                            </select>
                        </td>
                    </tr>";
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <div id="equipment-btn"><input type = "submit" name = "submit" value = "Submit"/></div>
                        <div id="equipment-btn"><input type = "submit" name = "addRow" value = "Add Row" /></div>
                    </td> 
                </tr>
            </table>
        </div>
    </form>


</body>
</html>