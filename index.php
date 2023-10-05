<?php
session_start();
include 'student.php';

$student = new Student;

if (isset($_POST) && isset($_POST['login']) && isset($_POST['password'])) {
    $student->login();
}

if (isset($_POST) && isset($_POST['name']) && !empty($_POST['surename']) && isset($_POST['age'])) {
    $student->add_student();
}
if (isset($_POST['logout'])) {
    $student->logOut();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        include 'form.php';
    } else {
        include 'login.php';
    }


    ?>
</body>

</html>