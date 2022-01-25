<?php
require("./php/header.php");
?>

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
                <td>123-69-420</td>
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
                <td>123-69-420</td>
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
                <td>123-69-420</td>
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
            <form>
                <input type="text" placeholder="First name"><br /><br /> 
                <input type="text" placeholder="Last name"><br /><br /> 
                <input type="text" placeholder="Officer ID Number"><br /><br />
                <select>
                    <option value="1">-Select level of access-</option>
                    <option value="2">General</option>
                    <option value="3">Admin</option>
                </select><br /><br /> 
                <button>Create account</button>
            </form>
        </div>
    </div>

</body>
</html>