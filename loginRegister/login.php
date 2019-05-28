<?php include_once "../includes/header.php";?>

<?php


    if (isset($_POST['login-btn'])) {
        require_once "../functions/db.php";
        require_once "../functions/functions.php";

        $loginEmail = htmlspecialchars(trim($_POST['loginEmail'])) ?? "";
        $loginPwd = htmlspecialchars(trim($_POST['loginPwd'])) ?? "";

        $loginEmail = mysqli_real_escape_string($conn, $loginEmail);
        $loginPwd = mysqli_real_escape_string($conn, $loginPwd);


        if (!loginValidation($loginEmail, $loginPwd)) {
            loginSelect($loginEmail, $loginPwd);
        }
    
    } 
?>

    <div class="container">
        <div class="row py-5">
            <div class="col-md-7 col-sm-12">
                <!-- start form -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ;?>">
                    <div class="form-group">
                        <label for="loginEmail">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp" placeholder="Enter email"
                        value="<?php if (isset($loginEmail)) {echo $loginEmail;} ;?>"
                        >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                        <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['emailError'])) {
                                echo $_SESSION['emailError'];
                            }
                        ?>
                    </span>

                    </div>
                    <div class="form-group">
                        <label for="loginPwd">Password</label>
                        <input type="password" class="form-control" id="loginPwd" name="loginPwd" placeholder="Password">

                        <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['pwdError'])) {
                                echo $_SESSION['pwdError'];
                            }
                        ?>
                    </span>

                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required
                        >
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>

                    </div>
                    <button type="submit" name="login-btn" class="btn btn-primary">Submit</button>
                </form>
                <!-- end form -->
            </div>

            <div class="col-md-5 col-sm-12">
                <img src="../images/para4.jpg" alt="register image" class="img-fluid" style="border-radius:50%;">
            </div>

        </div>
    </div>

<?php include_once "../includes/footer.php";?>
