<?php

include_once "includes/header.php";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["user_id"]) && !isset($_COOKIE['playedCookie'])) {
    require_once "functions/db.php";
    require_once "functions/functions.php";

    $value = 'played';
    setcookie("playedCookie", $value, time()+3600);  /* expire in 1 hour */

    $email = $_SESSION["user_id"];
    randomWinners();
    insertWinners($email);


    if (isset( $_SESSION['win'])) {
        header("Location: includes/win.php");
    } else {
        header("Location: includes/didntWin.php");
    }
    
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION["user_id"])) {
    echo "<script type='text/javascript'>";
    echo "alert('You have to be logged in for playing')";
    echo "</script>";
} elseif (isset($_COOKIE['playedCookie'])) {
    echo "<script type='text/javascript'>";
    echo "alert('You can play in an hour again')";
    echo "</script>";
}
// 

// randomWinners();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        button{
            cursor:pointer;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row py-5 text-center">
            <div class="col-md-12">
                <h1 class="text-danger mb-5">Choose and maybe its your lucky day</h1>
            </div>
            <div class="col-md-6">
            <form action="" method="POST">
                <button class="btn btn-danger btn-block" name="btn-press1">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press2">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press3">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press4">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press5">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press6">Feel lucky?</button><br><br>
                <button class="btn btn-danger btn-block" name="btn-press6">Feel lucky?</button><br><br>
            </form>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="./images/giphy.gif" alt="gifts image">
            </div>
        </div>
    </div>
   

<?php
include_once "includes/footer.php";
?>
