<?php
include_once "header.php";

if (isset($_SESSION['win'])) {
    unset($_SESSION['win']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: ../play.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id='youWon'>
        <h1>You didnt win but u can play again!</h1>
        <br>
        <form action="" method="POST">
            <button class='btnEscape'>OK</button>
        </form>
    </div>
    
    <?php
include_once "footer.php";
?>