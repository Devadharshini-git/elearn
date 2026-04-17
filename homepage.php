<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduLearn - Online Learning Platform</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <!-- Header -->
  <header class="header">
    <div class="container header-container">
      <img src="logo.png" height="50" width="50">
      <h1 class="logo">EduLearn</h1>

      <nav>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#materials">Study Materials</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Static Profile -->
      <div class="profile">
        <img src="image1.png" width="60" height="60">
        <h3>Guest User</h3>
        <span>Student</span>
        <a href="#" class="btn">View Grade</a>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero" id="home">
    <div class="container hero-content">
      <h2>Learn Anytime, Anywhere</h2>
      <p>Access high-quality courses and study materials from top educators.</p>
      <a href="#courses" class="btn">Explore Courses</a>
    </div>
  </section>

  <!-- Courses -->
  <section id="courses" class="courses">
    <div class="container">
      <h2 class="section-title">Popular Courses</h2>

      <div class="card-container">
        <div class="card">
          <img src="math1.png">
          <div class="card-content">
            <h3>Mathematics</h3>
            <p>Master math with expert-led tutorials.</p>
            <a href="l1.php" class="btn">Learn More</a>
          </div>
        </div>

        <div class="card">
          <img src="science.png">
          <div class="card-content">
            <h3>Science</h3>
            <p>Explore physics, chemistry, and biology.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>

        <div class="card">
          <img src="programming.jpg">
          <div class="card-content">
            <h3>Programming</h3>
            <p>Learn coding with real projects.</p>
            <a href="#" class="btn">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Materials -->
  <section id="materials" class="materials">
    <div class="container">
      <h2 class="section-title">Study Materials</h2>

      <ul class="material-list">
        <li><a href="Commutative Property1.pdf" class="btn">Math Notes (PDF)</a></li>
        <li><a href="#" class="btn">Science Worksheets</a></li>
        <li><a href="#" class="btn">Programming Exercises</a></li>
      </ul>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact">
    <div class="container header-container">

      <div class="contact-item">
        <img src="phone.png">
        <p>9846034789</p>
      </div>

      <div class="contact-item">
        <img src="email.png">
        <p>Edulearn@gmail.com</p>
      </div>

    </div>
  </footer>

</body>
</html>