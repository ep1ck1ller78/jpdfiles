<?php
require("./php/header.php");
?>
    <div class="page-heading">
        <h1>Manage existing users or create a new account</h1>
        <p>Administrator accounts have access to view existing user accounts as well as making changes such as resetting passwords, and creating or deleting user accounts.</p>
    </div>

    <div class="table">
        <table id="table">
            <tr>
                <th>Name</th>
                <th>Officer ID Number</th>
                <th>Access Level</th>
                <th>Manage</th>
            </tr>
            <tr>
                <td>Nicholas Campbell </td>
                <td>123-45-678</td>
                <td>Admin</td>
                <td>
                    <div class="reset-btns">
                        <button id="reset-password" onclick="showResetModal()">Reset Password</button>
                        <button id="delete-user" onclick="showDeleteModal()">Delete User</button>
                    </div>
                </td>            
            </tr>
            <tr>
                <td>Luke Pjontek</td>
                <td>123-45-678</td>
                <td>Admin</td>
                <td>
                    <div class="reset-btns">
                        <button id="reset-password" onclick="showResetModal()">Reset Password</button>
                        <button id="delete-user" onclick="showDeleteModal()">Delete User</button>
                    </div>
                </td>            
            </tr>
            <tr>
                <td>Brian Buchholz</td>
                <td>123-45-678</td>
                <td>General</td>
                <td>
                    <div class="reset-btns">
                        <button id="reset-password" onclick="showResetModal()">Reset Password</button>
                        <button id="delete-user" onclick="showDeleteModal()">Delete User</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button id="new-user-btn" onclick="showNewUserModal()">New User</button>
                </td>
            </tr>
        </table>
    </div>

    <!-- Reset Password Modal -->
    <div id="reset-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="hideResetModal()">&times;</span>
            <h1>Reset user's password: <i>Fname Lname</i></h1>
            <p>Type a new password below to reset the desired account's password:</p>
            <form>
                <input type="text" placeholder="New password"><br /><br />
                <input type="text" placeholder="Re-enter new password"><br /><br />
                <button>Change password</button>
            </form>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div id="delete-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="hideDeleteModal()">&times;</span>
            <h1>Delete user account: <i>Fname Lname</i></h1>
            <p>To confirm, enter the officer name of desired user account below:</p>
            <form>
                <input type="text" placeholder="FirstName LastName"><br /><br />
                <button>Delete user</button>
            </form>
        </div>
    </div>

    <!-- New User Modal -->
    <div id="new-user-modal" class="modal">
        <div class="modal-content">
        <span class="close" onclick="hideNewUserModal()">&times;</span>
            <h1>Create a new user account</h1>
            <form method="POST">
                <input type="text" id="first" name="first" placeholder="First name"><br /><br /> 
                <input type="text" id="last" name="last" placeholder="Last name"><br /><br /> 
                <input type="text" id="id" name="id" placeholder="Officer ID number"><br /><br />
                <select id="access" name="access">
                    <option value="0">-Select level of access-</option>
                    <option value="1">General</option>
                    <option value="2">Admin</option>
                </select><br /><br />
                <input type="text" id="id" name="password" placeholder="Password"><br /><br />
                <input type="text" id="id" name="rePassword" placeholder="Re-enter new password"><br /><br /> 
                <div class = "modalButton"><input name="addBtn" type="submit" value="Create account"/></div>
            </form>

            <?php
                //Error for empty/invalid fields
                if (isset($_POST['addBtn'])){
                    $first = $_POST['first'];
                    $last = $_POST['last'];
                    $id = $_POST['id'];
                    $access = $_POST['access'];
                    $password = $_POST['password'];
                    $rePassword = $_POST['rePassword'];

                    if (empty($first) || empty($last) || empty($id) || empty($password) || empty($rePassword)) {
                        echo "<h1>Please fill out all fields!</h1>";
                        if (empty($first)) {
                            echo "<script>showError('first')</script>";
                        }
                        if (empty($last)) {
                            echo "<script>showError('last')</script>";
                        }
                        if (empty($id)) {
                            echo "<script>showError('id')</script>";
                        }
                        if (empty($password)) {
                            echo "<script>showError('password')</script>";
                        }
                        if (empty($rePassword)) {
                            echo "<script>showError('rePassword')</script>";
                        }
                        echo "<script>showNewUserModal()</script>";
                    }
                    if ($access == 0) {
                        echo "<script>showError('access')</script>";
                    }
                }
            ?>

        </div>
    </div>

</body>
</html>