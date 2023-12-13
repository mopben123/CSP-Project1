function goBack() {
  history.go(-1); // Go back one step in the history
}

// Store previous page URL in sessionStorage when arriving at this login page
sessionStorage.setItem('prevPage', document.referrer);

document.getElementById('loginForm').addEventListener('submit', function (event) {
  event.preventDefault();

  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (username === 'user' && password === 'password') {
    alert('Login successful!');
    // Retrieve the previous page URL from sessionStorage and navigate to it after successful login
    var prevPage = sessionStorage.getItem('prevPage');
    if (prevPage) {
      location.href = prevPage;
    } else {
      history.go(-1); // If sessionStorage doesn't have the previous page, go back one step in history
    }

    // Make the entire document editable after successful login
    sessionStorage.setItem('loggedIn', 'yes');
  } else {
    var errorMessage = document.getElementById('error-message');
    errorMessage.textContent = 'Incorrect username or password';
  }
});
