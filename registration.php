<?php
session_start();
require 'db.php'; //this is to connect the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);  // haboy data like username sa inyo database mga bubu
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

if ($password !== $passwordConfirm) {
    die('Passwords do not match.'); //verification for the first password inputed
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare('INSERT INTO users (username, password_hash) VALUES (?,?)'); // for inserting datasa database hangag
if ($stmt) {
    $stmt->bind_param('ss', $username, $passwordHash);
    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'> Login Here</a>";
    } else {
        echo "Error; " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Statement preparation failed!";
  }
}
?>

<style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-form {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .register-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
            text-align: center;
        }
        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .register-form input:focus {
            border-color: #007bff;
            outline: none;
        }
        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .register-form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form method="POST" class="register-form">
        <h2>Register</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirm" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
    
