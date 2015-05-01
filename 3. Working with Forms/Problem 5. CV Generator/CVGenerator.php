<?php
if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $birthDate = $_POST['birthDate'];
    $nationality = $_POST['nationality'];
    $company = $_POST['company'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $compLang[] = $_POST['compLang[]'];
    $compLangLvl[] = $_POST['compLangLvl[]'];
    $language[] = $_POST['language[]'];
    $comprehension[] = $_POST['comprehension[]'];
    $reading[] = $_POST['reading[]'];
    $writing[] = $_POST['writing[]'];
}
?>