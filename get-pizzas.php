<?php
include 'db_connection.php';

$sql = "SELECT name FROM pizzas";
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

foreach ($pizzas as $pizza) {
    echo htmlspecialchars($pizza['name']) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>