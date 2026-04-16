<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Math Topics</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Container for Buttons */
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        /* Header */
        h2 {
            color: #0277bd;
            font-size: 24px;
        }

        /* Topic Button Section */
        .topics {
            margin-top: 20px;
        }

        /* Styling for Topic Buttons */
        .topic-btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 20px;
            background: white;
            color: #0277bd;
            border: 2px solid #0277bd;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect */
        .topic-btn:hover {
            background: #0277bd;
            color: white;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .topic-btn {
                width: 80%;
                padding: 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>View grade for Mathematics</h2>
        <div class="topics">
            <a href="results.php" class="topic-btn">Division</a>
            <a href="commutative_property.php" class="topic-btn">Commutative Property</a>
            <a href="polygon.php" class="topic-btn">Polygon</a>
            <a href="place_value.php" class="topic-btn">Place Value</a>
            <a href="proportion.php" class="topic-btn">Proportion</a>
            <a href="positive_integer.php" class="topic-btn">Positive Integer</a>
        </div>
    </div>

</body>
</html>
