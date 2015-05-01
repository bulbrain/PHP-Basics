<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sum of Two Numbers</title>
</head>
<body>
<form method="post">
    First number: <input type="text" name="firstNumber">
    Second number: <input type="text" name="secondNumber">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    echo '$firstNumber + $secondNumber = ' . $firstNumber . ' + '  . $secondNumber . ' = ' .
        number_format($firstNumber + $secondNumber, 2);
}
?>