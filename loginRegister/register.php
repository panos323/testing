<?php include_once "../includes/header.php";?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once "../functions/db.php";
        require_once "../functions/functions.php";

        $firstName = htmlspecialchars(trim($_POST["registerName"])) ?? "";
        $lastName = htmlspecialchars(trim($_POST["registerLastName"])) ?? "";
        $email = htmlspecialchars(trim($_POST["registerEmail"])) ?? "";
        $password = htmlspecialchars(trim($_POST["registerPassword"])) ?? "";
        $registerCheckbox = isset($_POST['registerCheckbox']) ? 1 : 0;

        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName = mysqli_real_escape_string($conn, $lastName);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);


        if (!registerErrors($firstName, $lastName, $email, $password, $registerCheckbox)) {
            insertQuery($firstName, $lastName, $email, $password);
        } 
        
    } 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 py-5">
            <h1 class="text-warning">Register</h1>
        </div>
        <div class="col-md-7 col-sm-12">
            <!-- start form -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label for="registerName">First Name</label>
                    <input type="text" class="form-control" id="registerName" name="registerName" placeholder="First Name" required
                    value = "<?php if(isset($firstName)){echo $firstName;}?>"
                    >
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['fNameError'])) {
                                echo $_SESSION['fNameError'];
                            }
                        ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="registerLastName">First Name</label>
                    <input type="text" class="form-control" id="registerLastName" name="registerLastName" placeholder="Last Name" required
                    value = "<?php if(isset($lastName)){echo $lastName;}?>"
                    >
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['lNameError'])) {
                                echo $_SESSION['lNameError'];
                            }
                        ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email address</label>
                    <input type="email" class="form-control" id="registerEmail" name="registerEmail"  required aria-describedby="emailHelp" placeholder="Enter email"
                    value = "<?php if(isset($email)){echo $email;}?>"
                    >
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['emailError'])) {
                                echo $_SESSION['emailError'];
                            }
                        ?>  
                    </span>
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['emailValid'])) {
                                echo "<br>";
                                echo $_SESSION['emailValid'];
                            }
                            if (isset($_SESSION['emailExist'])) {
                                echo "<br>";
                                echo $_SESSION['emailExist'];
                            }
                        ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password" required
                    value = "<?php if(isset($password)){echo $password;}?>"
                    >
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['pwdError'])) {
                                echo $_SESSION['pwdError'];
                            }
                        ?>
                    </span>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="registerCheckbox" name="registerCheckbox" required
                    value = "<?php if(isset($registerCheckbox)){ ?>
                    checked = "checked" <?php } ?>
                    >
        
                    <label class="form-check-label" for="registerCheckbox">Check me out</label>
                    <span class='errorValidationMsg'>
                        <?php
                            if (isset($_SESSION['checkBoxChecked'])) {
                                echo $_SESSION['checkBoxChecked'];
                            }
                        ?>
                    </span>
                </div>
                <button name="btnRegister" type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- end form -->
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="../images/para1.jpg" alt="register image" class="img-fluid" style="border-radius:50%;">
        </div>
    </div>
</div>

<?php include_once "../includes/footer.php";?>