// Login error message, empty fields
function showError(x) {
    document.getElementById(x).style.background = "linear-gradient(to bottom, #ffffff 64%, #ff3300 100%)";
    document.getElementById(x).style.border = "1px solid red bottom";
}

// Add row into add equipment table
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

// Pop-up window Functions
function closeWindow(x) {
    document.getElementById(x).style.opacity = '0';
    if(x == "windBack"){
        document.getElementById(x).style.display = 'none';
    }
}

window.onclick = function(event) {
  if (event.target == document.getElementById('windBack')) {
    document.getElementById('windBack').style.display = "none";
  }
}

//User Info
function showUserInfo() {
    if (document.getElementById("userInfo").style.visibility == 'hidden'){
        document.getElementById("userInfo").style.visibility = 'visible';
        document.getElementById("userInfo").style.opacity = 1;
    }else{
        document.getElementById("userInfo").style.visibility = 'hidden'
        document.getElementById("userInfo").style.opacity = 0;
    }
}