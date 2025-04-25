<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit();
    }

    $sql = "SELECT * FROM login WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome, " . htmlspecialchars($row['name']) . ".";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found..";
    }

    $stmt->close();
    $conn->close();
}
?>
