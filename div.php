<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division Quiz</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .quiz-container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 30px;
        }

        .question {
            margin-bottom: 25px;
        }

        .question p {
            font-size: 20px;
            font-weight: 600;
            color: #34495e;
            margin-bottom: 15px;
        }

        .options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .options label {
            display: flex;
            align-items: center;
            background: #f8f9fa;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .options label:hover {
            background: #e9ecef;
        }

        .options input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
        }

        .correct {
            background: #d4edda !important;
            border: 2px solid #28a745;
        }

        .wrong {
            background: #f8d7da !important;
            border: 2px solid #dc3545;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #3498db;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #2980b9;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <h1>Division Quiz</h1>

        <!-- Question 1 -->
        <div class="question">
            <p>1. What is 24 ÷ 6?</p>
            <div class="options" id="q1">
                <label>
                    <input type="radio" name="q1" value="2"> 2
                </label>
                <label>
                    <input type="radio" name="q1" value="4"> 4
                </label>
                <label>
                    <input type="radio" name="q1" value="6"> 6
                </label>
                <label>
                    <input type="radio" name="q1" value="3"> 3
                </label>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="question">
            <p>2. If a baker has 40 cupcakes and wants to pack them into boxes of 8, how many boxes will he need?</p>
            <div class="options" id="q2">
                <label>
                    <input type="radio" name="q2" value="6"> 6
                </label>
                <label>
                    <input type="radio" name="q2" value="5"> 5
                </label>
                <label>
                    <input type="radio" name="q2" value="4"> 4
                </label>
                <label>
                    <input type="radio" name="q2" value="7"> 7
                </label>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="question">
            <p>3. A class of 30 students is divided into groups of 5. How many groups are formed?</p>
            <div class="options" id="q3">
                <label>
                    <input type="radio" name="q3" value="8"> 8
                </label>
                <label>
                    <input type="radio" name="q3" value="5"> 5
                </label>
                <label>
                    <input type="radio" name="q3" value="6"> 6
                </label>
                <label>
                    <input type="radio" name="q3" value="4"> 4
                </label>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="question">
            <p>4. What is the remainder when 29 is divided by 5?</p>
            <div class="options" id="q4">
                <label>
                    <input type="radio" name="q4" value="1"> 1
                </label>
                <label>
                    <input type="radio" name="q4" value="2"> 2
                </label>
                <label>
                    <input type="radio" name="q4" value="3"> 3
                </label>
                <label>
                    <input type="radio" name="q4" value="4"> 4
                </label>
            </div>
        </div>

        <!-- Submit Button -->
        <button class="submit-btn" onclick="calculateScore()">Submit</button>

        <!-- Result Display -->
        <div class="result" id="result"></div>
    </div>

    <script>
        // Correct answers
        const correctAnswers = {
            q1: "4",  // 24 ÷ 6 = 4
            q2: "5",  // 40 ÷ 8 = 5
            q3: "6",  // 30 ÷ 5 = 6
            q4: "4"   // 29 ÷ 5 = remainder 4
        };

        // Function to calculate the score
        function calculateScore() {
            let score = 0;

            // Check each question
            for (let i = 1; i <= 4; i++) {
                const questionName = `q${i}`;
                const selectedAnswer = document.querySelector(`input[name="${questionName}"]:checked`);
                const optionsDiv = document.getElementById(questionName);

                // Reset previous colors
                optionsDiv.querySelectorAll("label").forEach(label => {
                    label.classList.remove("correct", "wrong");
                });

                if (selectedAnswer) {
                    if (selectedAnswer.value === correctAnswers[questionName]) {
                        score++;
                        selectedAnswer.parentElement.classList.add("correct");
                    } else {
                        selectedAnswer.parentElement.classList.add("wrong");
                    }
                }
            }

            // Display the result
            const resultElement = document.getElementById("result");
            resultElement.textContent = `Your score is ${score} out of 4.`;
        }
    </script>
</body>
</html>
