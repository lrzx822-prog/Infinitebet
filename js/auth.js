// auth.js

// Function to handle login
function handleLogin(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    fetch('https://api.example.com/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username: username, password: password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Handle successful login
            console.log('Login successful!');
        } else {
            // Handle login error
            console.error('Login failed:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Function to handle registration
function handleRegistration(event) {
    event.preventDefault();
    var username = document.getElementById('new-username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('new-password').value;
    
    fetch('https://api.example.com/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username: username, email: email, password: password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Handle successful registration
            console.log('Registration successful!');
        } else {
            // Handle registration error
            console.error('Registration failed:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Attach event listeners to forms
document.getElementById('login-form').addEventListener('submit', handleLogin);
document.getElementById('registration-form').addEventListener('submit', handleRegistration);
