<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Show Annual Expenses</title>
</head>
<body>
    <form method="post">
        <label for="year">Enter number of years:</label>
        <input type="text" name="year">
        <input type="submit" name="submit" value="Show costs">
    </form>
</body>
</html>
<?php
echo "<table border='1'> <tr> <th>Year</th>";
for ($i = 1; $i <= 12; $i++){
    $monthNum  = $i;
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F');
    echo "<th>$monthName</th>";
};
echo "<th>Total:</th> </tr>";
if(isset($_POST['year'])) {
    $year = $_POST['year'];
    for($i = 2015 - $year; $i < 2015; $i++) {
        echo "<tr><td>" . $i . "</td>";
        $sum = 0;
        for ($j = 1; $j < 13; $j++){
            $rnd = rand(0, 999);
            $sum += $rnd;
            echo "<td>" . $rnd . "</td>";
        };
        echo "<td>" . $sum . "</td></tr>";
    };
    echo "</table>";
};
?>