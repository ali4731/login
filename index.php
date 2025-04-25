<?php
session_start();

$errorMessages = $_SESSION['errors'] ?? [];
$successMessage = $_SESSION['success'] ?? '';
$oldInput = $_SESSION['old_input'] ?? [];

session_unset(); // Clear session after reading to avoid old messages
?>



<!DOCTYPE html>
<html>
<head>
    <title>Pizza Form</title>
    <style>
        form {
            width: 300px;
            margin: 30px auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<p>Register Here......</p>

<h2 style="text-align: center;">Rgister</h2>

<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Enter username" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <button type="submit" name="login">Register</button>
</form>







<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Enter username" value="<?php echo htmlspecialchars($oldInput['username'] ?? '') ?>" required><br><br>
    <input type="password" name="password" placeholder="Enter password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>





<form action="insert-pizza.php" method="POST">
    <input type="text" name="name" placeholder="Enter pizza name" required>
    <button type="submit" name="submit">Add Pizza</button>
</form>

<h3>Pizza List:</h3>
<?php include 'get-pizzas.php'; ?>

</body>
</html>
