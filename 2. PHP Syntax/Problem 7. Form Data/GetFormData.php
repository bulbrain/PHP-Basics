<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Get form data</title>
</head>
<body>
<form method="post">
    <input type="text" name="name" placeholder="Name.."><br>
    <input type="text" name="age" placeholder="Age.."><br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    echo 'My name is ' . $name . '. I am ' . $age . ' years old. I am ' . $sex . '.';
};
?>
</body>
</html>