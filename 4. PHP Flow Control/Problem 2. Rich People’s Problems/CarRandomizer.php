<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
</head>

<body>
<form method="post">
    <label for="cars">Enter cars</label>
    <input type="text" name="cars" id="cars">
    <input type="submit" name="submit" value="Show result">
</form>
</body>
</html>

<?php
if(isset($_POST['cars'])) {
    $cars = $_POST['cars'];
    $cars = explode(", ", $cars);
    $color = ["red", "blue", "yellow", "white", "black"];
    echo "<table border='1'><tr><th>Car</th><th>Color</th><th>Count</th></tr>";
    foreach($cars as $car) {
        echo "<tr><td>" . $car . "</td>" . "<td>" . $color[rand(0, 4)] . "</td>" . "<td>" . rand(1, 5) . "</td>" ;
    }
    echo "</table>";
}
?>