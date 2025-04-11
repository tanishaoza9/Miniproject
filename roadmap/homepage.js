document.addEventListener("DOMContentLoaded", function () {
    // Get elements
    const regButton = document.getElementById("regbut");
    const usernameInput = document.getElementById("usernamefield");
    const passwordInput = document.getElementById("passwordfield");
    const emailInput = document.getElementById("emailfield");

    // Validate Email Function
    function validateEmail(email) {
        const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailFormat.test(email);
    }

    // Validate Username Function (Only Letters Allowed)
    function validateUsername(username) {
        const usernameFormat = /^[A-Za-z]+$/;
        return usernameFormat.test(username);
    }

    // Special Character Pattern for Password
    const specialCharacterPattern = /[!@#$%^&*(),.?":{}|<>]/;

    // Add Event Listener
    if (regButton) {
        regButton.addEventListener("click", function (event) {
            event.preventDefault();

            const validUsername = usernameInput.value.trim();
            const validPassword = passwordInput.value.trim();
            const validEmail = emailInput.value.trim();

            if (!validUsername) {
                alert("Username is required!");
                return;
            }
            if (!validateUsername(validUsername)) {
                alert("Username should contain only letters!");
                return;
            }

            if (!validPassword || validPassword.length < 6) {
                alert("Password must be at least 6 characters long!");
                return;
            }
            if (!specialCharacterPattern.test(validPassword)) {
                alert("Password must contain at least one special character!");
                return;
            }
            if (!validateEmail(validEmail)) {
                alert("Please enter a valid email address!");
                return;
            }

            alert("Registration successful!");
            window.location.href = "register.html";
        });
    }
});
