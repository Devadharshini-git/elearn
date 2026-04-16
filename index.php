<?php 
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduLearn - Online Learning Platform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Internal CSS -->
  <style>
    /* General Body Styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0px;
        text-align: center;
        background-color: rgb(134, 205, 224);
        color: var(--black);
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensure the body takes at least the full viewport height */
    }

    /* Header Styling */
    header {
        background-color: #0277bd;
        color: white;
        padding: 10px 0;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
        justify-content: flex-end; /* Align links to the end (left side) */
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px; /* Reduce the font size */
        transition: background-color 0.3s ease;
    }

    .nav-links .login-btn, .nav-links .signup-btn {
        background-color: white; /* Button color set to white */
        color: #0277bd; /* Text color */
        border: 1px solid #0277bd; 
        /* Border color to match */
    }

    .nav-links .login-btn:hover, .nav-links .signup-btn:hover {
        background-color: #01579b; /* Darker shade on hover */
        color: white; 
        padding: 10px; /* Text color becomes white when hovered */
    }

    /* Hero Section */
    .hero {
        background-color: #e0f7fa;
        padding: 100px 0;
        text-align: center;
        flex-grow: 1; /* Allow the hero section to grow and take up available space */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: background 1s ease-in-out;
    }

    .hero h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    /* Get Started Button Styling */
    .get-started-btn {
        background-color: #0277bd; /* Blue color */
        color: white; /* White text */
        padding: 15px 30px; /* Padding around the text */
        font-size: 18px; /* Font size */
        border-radius: 5px; /* Rounded corners */
        border: none; /* No border */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s ease;
        margin-top: 20px; /* Add some space above the button */
        text-decoration: none; /* Remove underline */
    }

    .get-started-btn:hover {
        background-color: #01579b; /* Darker blue when hovered */
    }

    /* Footer */
    footer {
        background-color: #0277bd;
        color: white;
        text-align: center;
        padding: 10px 0;
        /* Always stick to the bottom */
        width: 100%;
    }

    /* Media Queries for Smaller Screens */
    @media (max-width: 768px) {
        .hero h2 {
            font-size: 24px;
        }

        .hero p {
            font-size: 16px;
        }

        .nav-links a {
            font-size: 12px; /* Smaller font size for smaller screens */
        }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container header-container">
      <h1 class="logo" style="padding-left:10px">EduLearn</h1>
      <nav>
        <ul class="nav-links">
          <!-- Login and SignUp links for pre-home -->
          
            <li><a href="signin.php" class="login-btn">Login</a></li>
            <li style="padding-right:10px"><a href="signup.php" class="signup-btn">Signup</a></li>
         
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="container hero-content">
      <h2 style="color:white;font: weight 20px;">Welcome to EduLearn</h2>
      <p style="padding-bottom:20px">Your online learning platform for success!</p>
      <!-- Get Started Button wrapped in anchor -->
      <a href="signup.php" class="get-started-btn">Get Started-></a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 EduLearn. All rights reserved.</p>
    </div>
  </footer>

  <!-- Script to Change Hero Background Image -->
  <script>
    window.onload = function() {
        // List of background images
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

        let currentImageIndex = 0; // Start with the first image

        function changeBackground() {
            // Set the background image based on the current index
            document.querySelector('.hero').style.backgroundImage = images[currentImageIndex];
            
            // Update the index to point to the next image, looping back to the first one when it reaches the end
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        // Change background every 5 seconds
        setInterval(changeBackground, 5000);

        // Set an initial background image when the page loads
        changeBackground();
    };
  </script>

  <script src="js/script.js"></script>
</body>
</html>