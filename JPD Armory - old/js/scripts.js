function showError(x) {
    document.getElementById(x).style.background = "linear-gradient(to bottom, #ffffff 64%, #ff3300 100%)";
    document.getElementById(x).style.border = "1px solid red bottom";
}

function addRow() {
    
}

// Reset Password Users Modal
function showResetModal() {
    document.getElementById("reset-modal").style.visibility = "visible"; 
}
function hideResetModal() {
    document.getElementById("reset-modal").style.visibility = "hidden"; 
}

// Delete User Modal
function showDeleteModal() {
    document.getElementById("delete-modal").style.visibility = "visible"; 
}
function hideDeleteModal() {
    document.getElementById("delete-modal").style.visibility = "hidden"; 
}

// New User Modal
function showNewUserModal() {
    document.getElementById("new-user-modal").style.visibility = "visible"; 
}
function hideNewUserModal() {
    document.getElementById("new-user-modal").style.visibility = "hidden"; 
}