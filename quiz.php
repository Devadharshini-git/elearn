<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commutative Property Quiz</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .quiz-container {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .quiz-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #3498db, #2ecc71);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
            position: relative;
            padding-bottom: 15px;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #3498db;
            border-radius: 2px;
        }

        .question {
            margin-bottom: 35px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .question:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .question p {
            font-size: 18px;
            font-weight: 600;
            color: #34495e;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .options label {
            display: flex;
            align-items: center;
            background: #ffffff;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #e9ecef;
        }

        .options label:hover {
            background: #f8f9fa;
            border-color: #3498db;
            transform: translateX(5px);
        }

        .options input[type="radio"] {
            margin-right: 15px;
            cursor: pointer;
            width: 18px;
            height: 18px;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: linear-gradient(90deg, #3498db, #2980b9);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            background: linear-gradient(90deg, #2980b9, #3498db);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
        }

        .quiz-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            font-size: 14px;
            color: #666;
        }

        .quiz-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .quiz-info i {
            color: #3498db;
        }

        .progress-bar {
            width: 100%;
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            margin: 20px 0;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #3498db, #2ecc71);
            width: 0;
            transition: width 0.3s ease;
        }

        @media (max-width: 768px) {
            .quiz-container {
                padding: 20px;
                margin: 10px;
            }

            .question {
                padding: 15px;
            }

            .options label {
                padding: 12px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="quiz-container">
        <h1>Commutative Property Quiz</h1>
        
        <div class="quiz-info">
            <span><i class="fas fa-clock"></i> Time: 10 minutes</span>
            <span><i class="fas fa-question-circle"></i> Questions: 4</span>
            <span><i class="fas fa-star"></i> Difficulty: Medium</span>
        </div>

        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 0%"></div>
        </div>

        <form action="results.php" method="POST">
            <!-- Question 1 -->
            <div class="question">
                <p>1. Does the commutative property apply to addition? (e.g., 2 + 3 = 3 + 2)</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q1" value="true" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="q1" value="false" required> No
                    </label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question">
                <p>2. Does the commutative property apply to subtraction? (e.g., 5 - 3 = 3 - 5)</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q2" value="true" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="q2" value="false" required> No
                    </label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question">
                <p>3. Does the commutative property apply to multiplication? (e.g., 4 × 7 = 7 × 4)</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q3" value="true" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="q3" value="false" required> No
                    </label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question">
                <p>4. Does the commutative property apply to division? (e.g., 8 ÷ 2 = 2 ÷ 8)</p>
                <div class="options">
                    <label>
                        <input type="radio" name="q4" value="true" required> Yes
                    </label>
                    <label>
                        <input type="radio" name="q4" value="false" required> No
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i> Submit Quiz
            </button>
        </form>
    </div>

    <script>
        // Update progress bar as user answers questions
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const totalQuestions = 4;
                const answeredQuestions = document.querySelectorAll('input[type="radio"]:checked').length;
                const progress = (answeredQuestions / totalQuestions) * 100;
                document.querySelector('.progress-bar-fill').style.width = progress + '%';
            });
        });
    </script>
</body>
</html>