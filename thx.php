<?php
session_start();

if (isset($_POST['btn1'])) {
    $_SESSION['firstVote'] = true;
} elseif (isset($_POST['btn2'])) {
    $_SESSION['secondVote'] = true;
} elseif (isset($_POST['btn3'])) {
    $_SESSION['thirdVote'] = true;
} elseif (isset($_POST['btn4'])) {
    $_SESSION['fourthVote'] = true;
} elseif (isset($_POST['btn5'])) {
    $_SESSION['fifthVote'] = true;
} elseif (isset($_POST['btn6'])) {
    $_SESSION['sixthVote'] = true;
}

header("Location: songs.php");
exit();