
<?php
session_destroy();
header("location: index.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #0277bd;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #0277bd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #01579b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Logout</h2>
        <form action="submit_logout" method="POST">
            <div class="form-group">
                <button type="submit">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>
