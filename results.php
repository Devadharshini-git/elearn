<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .results-container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            padding: 30px;
            text-align: center;
        }
        .results-container h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .results-container p {
            font-size: 18px;
            margin: 10px 0;
        }
        .results-container .correct {
            color: #2ecc71;
        }
        .results-container .incorrect {
            color: #e74c3c;
        }
        .progress-report {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            text-align: left;
        }
        .progress-report h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        .progress-report h3 {
            color: #34495e;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .progress-report .feedback {
            margin: 15px 0;
            padding: 15px;
            border-left: 4px solid #3498db;
            background: #fff;
            border-radius: 4px;
        }
        .progress-report .suggestion {
            margin: 15px 0;
            padding: 15px;
            border-left: 4px solid #2ecc71;
            background: #fff;
            border-radius: 4px;
        }
        .progress-bar {
            width: 100%;
            height: 20px;
            background: #eee;
            border-radius: 10px;
            margin: 10px 0;
            overflow: hidden;
        }
        .progress-bar-fill {
            height: 100%;
            background: #3498db;
            transition: width 0.3s ease;
        }
        .question-analysis {
            margin: 15px 0;
            padding: 15px;
            background: #fff;
            border-radius: 4px;
            border-left: 4px solid #f1c40f;
        }
        .question-analysis h4 {
            color: #2c3e50;
            margin-top: 0;
        }
        .question-analysis .explanation {
            margin-top: 10px;
            font-size: 0.95em;
            color: #666;
        }
        .performance-summary {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        .performance-item {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            margin: 10px;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .performance-item h4 {
            margin: 0 0 10px 0;
            color: #2c3e50;
        }
        .performance-item p {
            margin: 0;
            font-size: 1.2em;
            font-weight: bold;
            color: #3498db;
        }
        .step-by-step {
            margin-top: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .step-by-step ol {
            margin: 0;
            padding-left: 20px;
        }
        .step-by-step li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="results-container">
        <h1>Quiz Results</h1>
        <?php
        // Define correct answers and question explanations
        $correctAnswers = [
            'q1' => 'true',  // Commutative property applies to addition
            'q2' => 'false', // Commutative property does not apply to subtraction
            'q3' => 'true',  // Commutative property applies to multiplication
            'q4' => 'false'  // Commutative property does not apply to division
        ];

        $questionExplanations = [
            'q1' => 'This question tests your understanding of the commutative property in addition. Let\'s solve it step by step:
                    <div class="step-by-step">
                    <ol>
                        <li>Take two numbers: 2 and 3</li>
                        <li>First way: 2 + 3 = 5</li>
                        <li>Second way: 3 + 2 = 5</li>
                        <li>Compare: Both give the same result (5)</li>
                        <li>Conclusion: The commutative property applies to addition because changing the order doesn\'t change the result.</li>
                    </ol>
                    </div>',
            'q2' => 'This question evaluates your knowledge of the commutative property in subtraction. Let\'s solve it step by step:
                    <div class="step-by-step">
                    <ol>
                        <li>Take two numbers: 5 and 3</li>
                        <li>First way: 5 - 3 = 2</li>
                        <li>Second way: 3 - 5 = -2</li>
                        <li>Compare: Results are different (2 vs -2)</li>
                        <li>Conclusion: The commutative property does not apply to subtraction because changing the order changes the result.</li>
                    </ol>
                    </div>',
            'q3' => 'This question assesses your understanding of the commutative property in multiplication. Let\'s solve it step by step:
                    <div class="step-by-step">
                    <ol>
                        <li>Take two numbers: 4 and 7</li>
                        <li>First way: 4 × 7 = 28</li>
                        <li>Second way: 7 × 4 = 28</li>
                        <li>Compare: Both give the same result (28)</li>
                        <li>Conclusion: The commutative property applies to multiplication because changing the order doesn\'t change the result.</li>
                    </ol>
                    </div>',
            'q4' => 'This question tests your comprehension of the commutative property in division. Let\'s solve it step by step:
                    <div class="step-by-step">
                    <ol>
                        <li>Take two numbers: 8 and 2</li>
                        <li>First way: 8 ÷ 2 = 4</li>
                        <li>Second way: 2 ÷ 8 = 0.25</li>
                        <li>Compare: Results are different (4 vs 0.25)</li>
                        <li>Conclusion: The commutative property does not apply to division because changing the order changes the result.</li>
                    </ol>
                    </div>'
        ];

        // Initialize score and tracking
        $score = 0;
        $correctQuestions = [];
        $incorrectQuestions = [];

        // Debug: Print submitted answers
        echo "<!-- Debug: Submitted answers: ";
        print_r($_POST);
        echo " -->";

        // Check user answers
        foreach ($correctAnswers as $question => $correctAnswer) {
            if (isset($_POST[$question])) {
                $userAnswer = $_POST[$question];
                if ($userAnswer === $correctAnswer) {
                    $score++;
                    $correctQuestions[] = $question;
                } else {
                    $incorrectQuestions[] = $question;
                }
            }
        }

        // Calculate percentage
        $percentage = ($score / count($correctAnswers)) * 100;

        // Display score
        echo "<p>Your score: <b>$score out of " . count($correctAnswers) . "</b></p>";
        
        // Display progress bar
        echo "<div class='progress-bar'><div class='progress-bar-fill' style='width: $percentage%'></div></div>";
        echo "<p>Percentage: <b>$percentage%</b></p>";

        // Display detailed results
        foreach ($correctAnswers as $question => $correctAnswer) {
            $userAnswer = isset($_POST[$question]) ? $_POST[$question] : "No answer";
            $isCorrect = $userAnswer === $correctAnswer;
            echo "<p>$question: Your answer: <b class='" . ($isCorrect ? 'correct' : 'incorrect') . "'>$userAnswer</b> | Correct answer: <b>$correctAnswer</b></p>";
        }

        // Generate progress report
        echo "<div class='progress-report'>";
        echo "<h2>Progress Report</h2>";
        
        // Performance Summary
        echo "<div class='performance-summary'>";
        echo "<div class='performance-item'>";
        echo "<h4>Overall Score</h4>";
        echo "<p>$percentage%</p>";
        echo "</div>";
        echo "<div class='performance-item'>";
        echo "<h4>Questions Correct</h4>";
        echo "<p>$score/" . count($correctAnswers) . "</p>";
        echo "</div>";
        echo "<div class='performance-item'>";
        echo "<h4>Questions to Review</h4>";
        echo "<p>" . count($incorrectQuestions) . "</p>";
        echo "</div>";
        echo "</div>";
        
        // Overall performance feedback
        if ($percentage >= 90) {
            echo "<div class='feedback'>Excellent performance! You've demonstrated a strong understanding of the material. Your ability to solve complex problems and apply concepts correctly is impressive.</div>";
        } elseif ($percentage >= 70) {
            echo "<div class='feedback'>Good performance! You have a solid grasp of most concepts. With some focused practice on specific areas, you can achieve even better results.</div>";
        } elseif ($percentage >= 50) {
            echo "<div class='feedback'>Fair performance. While you understand some concepts, there's room for improvement in several areas. Focus on reviewing the fundamental concepts and practicing similar problems.</div>";
        } else {
            echo "<div class='feedback'>You might benefit from reviewing the material and practicing more. Consider seeking additional help or resources to strengthen your understanding of the core concepts.</div>";
        }

        // Question Analysis
        echo "<h3>Question Analysis</h3>";
        foreach ($correctAnswers as $question => $correctAnswer) {
            $userAnswer = isset($_POST[$question]) ? $_POST[$question] : "No answer";
            $isCorrect = $userAnswer === $correctAnswer;
            
            echo "<div class='question-analysis'>";
            echo "<h4>Question $question</h4>";
            echo "<p>Your answer: <b class='" . ($isCorrect ? 'correct' : 'incorrect') . "'>$userAnswer</b> | Correct answer: <b>$correctAnswer</b></p>";
            echo "<div class='explanation'>" . $questionExplanations[$question] . "</div>";
            
            if (!$isCorrect) {
                echo "<div class='suggestion'>";
                switch($question) {
                    case 'q1':
                        echo "To improve: Let's solve this step by step:
                              <div class='step-by-step'>
                              <ol>
                                <li>Remember: Commutative property means changing order doesn't change the result</li>
                                <li>Try with numbers: 2 + 3 = 5 and 3 + 2 = 5</li>
                                <li>Since both give the same result (5), the property applies</li>
                                <li>Therefore, the answer should be 'true'</li>
                              </ol>
                              </div>";
                        break;
                    case 'q2':
                        echo "To improve: Let's solve this step by step:
                              <div class='step-by-step'>
                              <ol>
                                <li>Remember: Commutative property means changing order doesn't change the result</li>
                                <li>Try with numbers: 5 - 3 = 2 but 3 - 5 = -2</li>
                                <li>Since the results are different (2 vs -2), the property doesn't apply</li>
                                <li>Therefore, the answer should be 'false'</li>
                              </ol>
                              </div>";
                        break;
                    case 'q3':
                        echo "To improve: Let's solve this step by step:
                              <div class='step-by-step'>
                              <ol>
                                <li>Remember: Commutative property means changing order doesn't change the result</li>
                                <li>Try with numbers: 4 × 7 = 28 and 7 × 4 = 28</li>
                                <li>Since both give the same result (28), the property applies</li>
                                <li>Therefore, the answer should be 'true'</li>
                              </ol>
                              </div>";
                        break;
                    case 'q4':
                        echo "To improve: Let's solve this step by step:
                              <div class='step-by-step'>
                              <ol>
                                <li>Remember: Commutative property means changing order doesn't change the result</li>
                                <li>Try with numbers: 8 ÷ 2 = 4 but 2 ÷ 8 = 0.25</li>
                                <li>Since the results are different (4 vs 0.25), the property doesn't apply</li>
                                <li>Therefore, the answer should be 'false'</li>
                              </ol>
                              </div>";
                        break;
                }
                echo "</div>";
            }
            echo "</div>";
        }

        // Next steps
        echo "<h3>Recommended Next Steps</h3>";
        if ($percentage < 100) {
            echo "<div class='suggestion'>";
            echo "1. Review the detailed explanations for questions you answered incorrectly<br>";
            echo "2. Practice similar problems focusing on the concepts you found challenging<br>";
            echo "3. Create a study plan focusing on your weak areas<br>";
            echo "4. Consider working with a study group or tutor for difficult topics<br>";
            echo "5. Take the quiz again after reviewing the material<br>";
            echo "6. Use additional learning resources to reinforce your understanding";
            echo "</div>";
        } else {
            echo "<div class='suggestion'>";
            echo "1. Challenge yourself with more advanced problems<br>";
            echo "2. Help others understand the concepts<br>";
            echo "3. Explore related topics to expand your knowledge<br>";
            echo "4. Consider teaching or tutoring others<br>";
            echo "5. Look for real-world applications of these concepts";
            echo "</div>";
        }

        echo "</div>";
        ?>
    </div>
</body>
</html>