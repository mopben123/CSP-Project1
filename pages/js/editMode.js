window.onload = function () {
    // Check if logged in 
    if (sessionStorage.getItem('loggedIn') === 'yes') {
        document.body.contentEditable = 'true'; // Enable edit mode
    } else {
        document.body.contentEditable = 'false'; // Disable edit mode
        console.log("Login state: false");
    }
};
