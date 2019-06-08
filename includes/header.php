<?php
session_start();
$title = 'Trainning with PHP-' .  date('Y/m/d');
$base = "PHP_trainning";

// APP Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost/PHP_trainning');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo '<link rel="stylesheet" type="text/css" href="'.URLROOT.'/css/animate.css">'; ?>
    <?php echo '<link rel="stylesheet" type="text/css" href="'.URLROOT.'/css/swiper.min.css">'; ?>
    <?php echo '<link rel="stylesheet" type="text/css" href="'.URLROOT.'/css/main.css">'; ?>
</head>
<body>
    <!--start nav-->
    <nav class="navbar navbar-expand-md navbar-light" id="mainNavBar">
        <h1 class="siteLogoHeader"><a class="navbar-brand mr-5" href="<?php echo $_SERVER['PHP_SELF'];?>">Trainne</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="">
            <!-- custom navbar icon -->
            <i class="fas fa-bars"></i>
        </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo URLROOT . '\index.php'; ?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT . '\parallax.php';?>">Parallax</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT . '\songs.php';?>">Songs</a>
            </li>
            <?php if (isset($_SESSION['userLogged'])) { ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT . '\gifts.php';?>">Gifts</a>
            </li>
            <?php } ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <?php if (!isset($_SESSION['userLogged'])) { ?>
                    <li class="nav-item loginRegisterNavItem">
                    <a class="nav-link font-weight-bold border" href="<?php  echo URLROOT . '\loginRegister/register.php'; ?>">Register</a>
                </li>
                <li class="nav-item loginRegisterNavItem">
                    <a class="nav-link font-weight-bold border" href="<?php  echo URLROOT . '\loginRegister/login.php'; ?>">Login</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item loginRegisterNavItem">
                        <a class="nav-link font-weight-bold border" href="<?php  echo URLROOT . '\loginRegister/logout.php'; ?>">Logout</a>
                </li>
                <?php } ?>
                
            </ul>
        </form>
        </div>
    </nav>
    <!--end nav-->
