// document.addEventListener("DOMContentLoaded", function () {
//     // Get elements
//     const loginButton = document.getElementById("loginbut");
//     const usernameInput = document.getElementById("usernamefield");
//     const passwordInput = document.getElementById("passwordfield");

//     // Validate Username Function (Only Letters Allowed)
//     function validateUsername(username) {
//         const usernameFormat = /^[A-Za-z]+$/;
//         return usernameFormat.test(username);
//     }

//     // Add Event Listener
//     if (loginButton) {
//         loginButton.addEventListener("click", function (event) {
//             event.preventDefault();

//             const validUsername = usernameInput.value.trim();
//             const validPassword = passwordInput.value.trim();

//             if (!validUsername) {
//                 alert("Username is required!");
//                 return;
//             }
//             if (!validateUsername(validUsername)) {
//                 alert("Username should contain only letters!");
//                 return;
//             }

//             if (!validPassword || validPassword.length < 6) {
//                 alert("Password must be at least 6 characters long!");
//                 return;
//             }

//             alert("Login successful!");
//             window.location.href = "login.html";
//         });
//     }
// });
