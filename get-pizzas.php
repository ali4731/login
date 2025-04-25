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
