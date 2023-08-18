<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form id="registrationForm">
        <label for="name">Name:</label>
        <input type="text" id="name" required>
        <span id="nameError" class="error"></span>
        <br>

        <label for="username">User Name:</label>
        <input type="text" id="username" required>
        <span id="usernameError" class="error"></span>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <span id="passwordError" class="error"></span>
        <br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" required>
        <span id="confirmPasswordError" class="error"></span>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" required>
        <span id="emailError" class="error"></span>
        <br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" required>
        <span id="dobError" class="error"></span>
        <br>

        <button type="submit">Register</button>
    </form>

    <script>
        const registrationForm = document.getElementById('registrationForm');
        const nameInput = document.getElementById('name');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const emailInput = document.getElementById('email');
        const dobInput = document.getElementById('dob');

        registrationForm.addEventListener('submit', function (e) {
            let isValid = true;

            if (!nameInput.value.trim()) {
                document.getElementById('nameError').textContent = 'Name is required';
                isValid = false;
            } else {
                document.getElementById('nameError').textContent = '';
            }

            if (!usernameInput.value.trim()) {
                document.getElementById('usernameError').textContent = 'Username is required';
                isValid = false;
            } else {
                document.getElementById('usernameError').textContent = '';
            }

            if (!passwordInput.value) {
                document.getElementById('passwordError').textContent = 'Password is required';
                isValid = false;
            } else {
                document.getElementById('passwordError').textContent = '';
            }

            if (!confirmPasswordInput.value) {
                document.getElementById('confirmPasswordError').textContent = 'Confirm Password is required';
                isValid = false;
            } else if (confirmPasswordInput.value !== passwordInput.value) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                isValid = false;
            } else {
                document.getElementById('confirmPasswordError').textContent = '';
            }

            if (!emailInput.value.trim()) {
                document.getElementById('emailError').textContent = 'Email is required';
                isValid = false;
            } else if (!isValidEmail(emailInput.value)) {
                document.getElementById('emailError').textContent = 'Invalid email format';
                isValid = false;
            } else {
                document.getElementById('emailError').textContent = '';
            }

            if (!dobInput.value) {
                document.getElementById('dobError').textContent = 'Date of Birth is required';
                isValid = false;
            } else {
                document.getElementById('dobError').textContent = '';
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        function isValidEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
    </script>
</body>
</html>
