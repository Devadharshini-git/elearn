<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduLearn - Online Learning Platform</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        text-align: center;
        background-color: rgb(134, 205, 224);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        background-color: #0277bd;
        color: white;
        padding: 10px 0;
    }

    .header-container {
        display: flex;
        justify-content: center; /* center logo */
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    /* Hero Section */
    .hero {
        background-color: #e0f7fa;
        padding: 100px 0;
        flex-grow: 1;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: background 1s ease-in-out;
    }

    .hero h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: white;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 20px;
        color: white;
    }

    .get-started-btn {
        background-color: #0277bd;
        color: white;
        padding: 15px 30px;
        font-size: 18px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .get-started-btn:hover {
        background-color: #01579b;
    }

    footer {
        background-color: #0277bd;
        color: white;
        padding: 10px 0;
        width: 100%;
    }

    @media (max-width: 768px) {
        .hero h2 {
            font-size: 24px;
        }

        .hero p {
            font-size: 16px;
        }
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header>
    <div class="header-container">
      <h1 class="logo">EduLearn</h1>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h2>Welcome to EduLearn</h2>
    <p>Your online learning platform for success!</p>

    <!-- Updated Link -->
    <a href="homepage.php" class="get-started-btn">Get Started →</a>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 EduLearn. All rights reserved.</p>
  </footer>

  <!-- Background Slider -->
  <script>
    window.onload = function() {
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

        let currentImageIndex = 0;

        function changeBackground() {
            document.querySelector('.hero').style.backgroundImage = images[currentImageIndex];
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        setInterval(changeBackground, 5000);
        changeBackground();
    };
  </script>

</body>
</html>