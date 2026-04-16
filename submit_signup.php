<?php
session_start();
include("connect.php");

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Login Process
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare SQL statement to fetch user data
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify password using the hashed value
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $row['email']; // Store the session
                header("Location: homepage.php");  // Redirect to homepage after successful login
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Error: Incorrect Password!');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Error: No account found with this email!');</script>";
        }
    }

    // Sign-Up Process
    if (isset($_POST['signUp'])) {
        // Fetch the form data
        $firstname = trim($_POST['fname']);
        $lastname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // Validate that all fields are filled
        if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($cpassword)) {
            echo "<script type='text/javascript'>alert('Error: All fields must be filled!');</script>";
            exit();
        }

        // Check if password and confirm password match
        if ($password !== $cpassword) {
            echo "<script type='text/javascript'>alert('Error: Passwords do not match!');</script>";
            exit();
        }

        // Hash the password before saving to the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to check if the email already exists
        $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $checkEmail->bind_param("s", $email);
        $checkEmail->execute();
        $result = $checkEmail->get_result();

        if ($result->num_rows > 0) {
            echo "<script type='text/javascript'>alert('Error: Email is already taken!');</script>";
            exit();
        } else {
            // If email does not exist, insert the new user into the database
            $insertQuery = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) 
                                           VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

            if ($insertQuery->execute()) {
                // If insertion is successful, set session variables and redirect to the homepage
                $_SESSION['email'] = $email;
                echo "<script type='text/javascript'>window.location.href='homepage.php';</script>";
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Error: SQL error occurred during sign-up!');</script>";
                exit();
            }
        }
    }
}
?>