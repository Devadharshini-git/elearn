<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e0f7fa;
            transition: background 2s ease; /* Smooth background transition */
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            opacity: 0;
            animation: fadeIn 1s ease-in forwards; /* Smooth fade-in for form */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0277bd;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #01579b;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #0288d1;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #0277bd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease; /* Smooth button hover transition */
        }
        .form-group button:hover {
            background-color: #01579b;
        }
        .signin-link {
            text-align: center;
            margin-top: 15px;
        }
        .signin-link a {
            color: #0277bd;
            text-decoration: none;
            font-weight: bold;
        }
        .signin-link a:hover {
            text-decoration: underline;
        }
        
        /* Keyframe animation for smooth fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="hero">
    <div class="container">
        <h2>Sign Up</h2>
        <form action="submit_signup.php" method="POST" onsubmit="return validatePassword()">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required>
            </div>
            <div class="form-group">
                <label for="class">Select Class</label>
                <select id="class" name="class" required>
                    <option value="">Select Class</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="signUp">Sign Up</button>
            </div>
        </form>
        <div class="signin-link">
            <p>If you already have an account:</p>
            <a href="signin.php">Sign In</a>
        </div>
    </div>

    <script>
        window.onload = function() {
            // List of background images (Make sure these images exist in the correct folder)
            const images = [
                "url('b1.jpg')",
                "url('b12.jpg')",
                "url('b3.jpg')",
                "url('b13.jpg')",
                "url('b5.jpg')",
                "url('b6.jpg')",
                "url('b7.jpg')",
                "url('b8.jpg')",
                "url('b9.jpg')",
                "url('b10.jpg')"
            ];

            function changeBackground() {
                const randomImage = images[Math.floor(Math.random() * images.length)];
                const heroElement = document.querySelector('.hero');
                
                heroElement.style.transition = 'background 1s ease'; // Smooth background transition
                heroElement.style.backgroundImage = randomImage;
                heroElement.style.backgroundSize = 'cover'; // Ensure the image covers the screen
                heroElement.style.backgroundPosition = 'center center'; // Center the image
                heroElement.style.backgroundRepeat = 'no-repeat'; // No repeating of background
                heroElement.style.height = '100vh'; // Ensure full viewport height
            }

            // Change background every 15 seconds
            setInterval(changeBackground, 15000);

            // Set an initial background image when the page loads
            changeBackground();
        };
   
        function validatePassword() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("cpassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match. Please try again.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>