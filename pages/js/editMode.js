var enableEditing = true;
window.onload = function () {
    // Check if logged in 
    if (sessionStorage.getItem('loggedIn') === 'yes') {
        // Enable edit mode for the entire document
        enableEditing = true;
    } else {
        // Disable edit mode for the entire document
        enableEditing = false;
    }
};

window.addEventListener('keydown', (event) => {
    if (enableEditing && event.key === 'e' && document.designMode === 'off' && event.ctrlKey) {
        document.designMode = 'on';
        alert('Editing Enabled');
    }
    else if (enableEditing && event.key === 'e' && document.designMode === 'on' && event.ctrlKey) {
        document.designMode = 'off';
        alert('Editing Disabled');
    }
    else if (enableEditing && event.key === 'e' && event.ctrlKey) {
        document.designMode = 'on';
        alert('Editing Enabled');
        console.log("3");
    }
    else if (event.key === 'e' && event.ctrlKey) {
        alert('Not Logged In');
    }
});