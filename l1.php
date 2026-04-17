<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Content Management Videos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .video-container {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding-bottom: 10px;
        }
        .video-container iframe {
            width: 100%;
            height: 200px;
            border: none;
        }
        .video-container p {
            padding: 10px;
            margin: 0;
            font-size: 16px;
            color: #555;
        }
        .quiz-button {
            display: inline-block;
            padding: 8px 15px;
            margin-top: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .quiz-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Mathematics</h1>
    <div class="video-grid">
        <div class="video-container">
            <iframe src="vid.mp4" allowfullscreen></iframe>
            <p>Division</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeBNUip0VvGGR7QxUhTe86sPFUXrTrOlc19VjbJ7dlIgvMArA/viewform?usp=header" class="quiz-button">Take Quiz</a>
            
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/1WmctNsom1Y" allowfullscreen></iframe>
            <p>Polygon</p>
            <a href="#" class="quiz-button">Take Quiz</a>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/t3l9KyBnSiI" allowfullscreen></iframe>
            <p>Commutative Property</p>
            <a href="quiz.php" class="quiz-button">Take Quiz</a>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/MWmd9CgQ_EE" allowfullscreen></iframe>
            <p>Place Value</p>
            <a href="#" class="quiz-button">Take Quiz</a>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/XHp63Hz6FeU" allowfullscreen></iframe>
            <p>Proportion</p>
            <a href="#" class="quiz-button">Take Quiz</a>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/SeqF8jM27AQ" allowfullscreen></iframe>
            <p>Positive Integer</p>
            <a href="#" class="quiz-button">Take Quiz</a>
        </div>
    </div>
</body>
</html>
