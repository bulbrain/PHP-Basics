<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Primes in range</title>
</head>
<body>
<form method="post">
    <label for="start">Starting Index:</label>
    <input type="text" name="start" id="start"/>
    <label for="end">End:</label>
    <input type="text" name="end" id="end"/>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>

<?php
if(isset($_POST['start'], $_POST['end']))
    $start = $_POST['start'];
    $end = $_POST['end'];
    echo "<div>";
    for($i = $start; $i <= $end; $i++) {
        if ($i == 1) {
            echo $i;
        };
        if ($i == 2) {
            echo "<strong>" . $i . "</strong>";
        };
        if ($i % 2 == 0) {
            echo $i;
        };
        for ($j = 3; $j <= ceil(sqrt($num)); $j = $j + 2) {
            if ($j % $j == 0)
                echo $j;
            }; else {
            echo "<strong>" . $i . "</strong>";
        };
    };
    echo "</div>";
?>
