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
  <link rel="stylesheet" href="styles.css"> <!-- Link to the provided stylesheet -->
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container header-container">
    <img src="logo.png" height="50px" width="50px">
      <h1 class="logo">EduLearn</h1>
      <nav>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#materials">Study Materials</a></li>
          <li><a href="#contact">Contact</a></li>
          
        </ul>
      </nav>
 
      <!-- User Profile Section -->
      <div class="profile">
        <?php if (isset($_SESSION['email'])): ?>
          <!-- If the user is logged in -->
          <img src="image1.png" alt="" width="60" height="60">
          <h3><?php echo htmlspecialchars($_SESSION['email']); ?></h3>
          <span>Student</span>
          <a href="profile.php" class="btn">View Grade</a>
          <a href="logout.php" class="btn">Logout</a>
        <?php else: ?>
          <!-- If the user is not logged in -->
          <img src="image1.png" alt="" width="60" height="60">
          <h3>Guest</h3>
          <span>Visitor</span>
          <div class="flex-btn">
            <a href="index.php" class="option-btn">Login</a>
            <a href="signup.php" class="option-btn">Register</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="container hero-content">
      <h2>Learn Anytime, Anywhere</h2>
      <p>Access high-quality courses and study materials from top educators.</p>
      <a href="#courses" class="btn">Explore Courses</a>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="courses" class="courses">
    <div class="container">
      <h2 class="section-title">Popular Courses</h2>
      <div class="card-container">
        <div class="card">
          <img src="math1.png" alt="Mathematics">
          <div class="card-content">
            <h3>Mathematics</h3>
            <p>Master math with expert-led tutorials and practice questions.</p>
            <a href="l1.php" class="btn">Learn More</a>
          </div>
        </div>
        <div class="card">
          <img src="science.png" alt="Science">
          <div class="card-content">
            <h3>Science</h3>
            <p>Explore physics, chemistry, and biology with interactive lessons.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
        <div class="card">
          <img src="programming.jpg" alt="Programming">
          <div class="card-content">
            <h3>Programming</h3>
            <p>Learn coding with hands-on projects in Python, Java, and more.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Study Materials Section -->
  <section id="materials" class="materials">
    <div class="container">
      <h2 class="section-title">Study Materials</h2>
      <ul class="material-list">
        <button<li><a href="Commutative Property1.pdf" class="btn">Math Notes (PDF)</a></li></button>
        <button<li><a href="#" class="btn">Science Worksheets</a></li></button>
        <button<li><a href="#" class="btn">Programming Exercises</a></li></button>
      </ul>
    </div>
  </section>
  <!-- Footer -->
  <footer>
 
  <div class="container header-container" id="contact">
    <div class="contact-item">
        <img src="phone.png" alt="Phone Icon">
        <p>9846034789</p>
    </div>
    
    <div class="contact-item">
        <img src="email.png" alt="Email Icon">
        <p>Edulearn@gmail.com</p>
    </div>
</div>
  </footer>

  <script src="js/script.js"></script>
</body>
<style>
    /* styles.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  line-height: 1.6;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
}

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
}

.nav-links a {
  color: white;
  text-decoration: none;
}

.profile {
  display: flex;
  align-items: center;
  gap: 10px;
}

.profile img {
  border-radius: 50%;
}

.hero {
  background-color: #e0f7fa;
  padding: 100px 0;
  text-align: center;
}

.hero h2 {
  font-size: 36px;
  margin-bottom: 20px;
}

.hero p {
  font-size: 18px;
  margin-bottom: 20px;
}

.btn {
  background-color: #0277bd;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

.courses {
  padding: 50px 0;
}

.section-title {
  text-align: center;
  margin-bottom: 30px;
}

.card-container {
  display: flex;
  justify-content: space-around;
  gap: 20px;
}

.card {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 10px;
  overflow: hidden;
  width: 30%;
  text-align: center;
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-content {
  padding: 20px;
}

.materials {
  padding: 50px 0;
}

.material-list {
  list-style: none;
  padding: 0;
  text-align: center;
}

.material-list li {
  margin-bottom: 10px;
}

footer {
  background-color: #0277bd;
  color: white;
  text-align: center;
  padding: 20px 0;
}
.header-container {
    display: flex;
    align-items: center;
    gap: 20px; /* Adjust spacing */
  }

  .contact-item {
    display: flex;
    align-items: center;
    gap: 10px; /* Space between icon and text */
  }

  .header-container p {
    margin: 0;
    font-size: 18px;
  }

  .header-container img {
    width: 40px;
    height: 40px;
  }
    </style>
</html>