<?php
include 'db_connection.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $insert_sql = "INSERT INTO pizzas (name) VALUES ('$name')";

    if (mysqli_query($conn, $insert_sql)) {
        echo "New pizza added successfully!<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
