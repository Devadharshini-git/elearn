<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduLearn - Online Learning Platform</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f5f9fc;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* Header */
    header {
      background: #0277bd;
      color: white;
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      transition: 0.3s;
    }

    .nav-links a:hover {
      color: #ffeb3b;
    }

    /* Profile */
    .profile {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .profile img {
      border-radius: 50%;
      border: 2px solid white;
    }

    .profile h3 {
      font-size: 14px;
    }

    .profile span {
      font-size: 12px;
      opacity: 0.8;
    }

    /* Hero */
    .hero {
      background: linear-gradient(rgba(2,119,189,0.7), rgba(2,119,189,0.7)),
                  url('b1.jpg') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 120px 20px;
    }

    .hero h2 {
      font-size: 42px;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 25px;
    }

    /* Button */
    .btn {
      background: #ff9800;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: 0.3s;
      display: inline-block;
    }

    .btn:hover {
      background: #e68900;
    }

    /* Sections */
    .courses, .materials {
      padding: 60px 0;
    }

    .section-title {
      text-align: center;
      font-size: 28px;
      margin-bottom: 40px;
    }

    /* Cards */
    .card-container {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .card {
      background: white;
      width: 300px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      margin-bottom: 10px;
    }

    .card-content p {
      font-size: 14px;
      margin-bottom: 15px;
    }

    /* Materials */
    .material-list {
      list-style: none;
      text-align: center;
    }

    .material-list li {
      margin: 10px 0;
    }

    /* Footer */
    footer {
      background: #0277bd;
      color: white;
      padding: 20px 0;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 10px;
      justify-content: center;
      margin: 5px 0;
    }

    .contact-item img {
      width: 30px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .header-container {
        flex-direction: column;
        gap: 10px;
      }

      .nav-links {
        flex-direction: column;
        align-items: center;
      }

      .hero h2 {
        font-size: 28px;
      }

      .card {
        width: 90%;
      }
    }

  </style>
</head>

<body>

  <!-- Header -->
  <header>
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
    <div class="container">
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
    <div class="container">
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