<?php include_once "includes/header.php"; ?>

<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require "functions/db.php";
        require "functions/functions.php";
     
        $giftOne = htmlspecialchars($_POST["check_random1"]);
        $giftTwo = htmlspecialchars($_POST["check_random2"]);
        $giftThree = htmlspecialchars($_POST["check_random3"]);
        $giftFour = htmlspecialchars($_POST["check_random4"]);
        $giftFive = htmlspecialchars($_POST["check_random5"]);

        $email = $_SESSION["user_id"];


        insertGifts($email, $giftOne, $giftTwo, $giftThree, $giftFour, $giftFive);

    }
?>

<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-12">
            <h1 class="mb-4 text-info">Choose any random gift</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <ul class="list-group randomListGroup" style="cursor:pointer;">
                    <li class="list-group-item">Cras justo odio
                        <input type="hidden" name="check_random1" value="0" type="checkbox"/>
                        <input class="float-right" type="checkbox" name="check_random1" value="1">
                    </li>
                    <li class="list-group-item">Dapibus ac facilisis in
                        <input type="hidden" name="check_random2" value="0" type="checkbox"/>
                        <input class="float-right" type="checkbox" name="check_random2" value="1">
                    </li>
                    <li class="list-group-item">Morbi leo risus
                        <input type="hidden" name="check_random3" value="0" type="checkbox"/>
                        <input class="float-right" type="checkbox" name="check_random3" value="1">
                    </li>
                    <li class="list-group-item">Porta ac consectetur ac
                        <input type="hidden" name="check_random4" value="0" type="checkbox"/>
                        <input class="float-right" type="checkbox" name="check_random4" value="1">
                    </li>
                    <li class="list-group-item">Vestibulum at eros
                        <input type="hidden" name="check_random5" value="0" type="checkbox"/>
                        <input class="float-right" type="checkbox" name="check_random5" value="1">
                    </li>
                </ul>
                <br>
                <button class="btn btn-outline-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-5 text-center">
        <div class="col-md-12">
            <!--start first -->
            <div class="changeText1">
                <p class="lead text-danger">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate rem quisquam, nostrum ex eum in ullam esse impedit accusantium nihil, tempora explicabo dignissimos quae ducimus facilis id, officiis quaerat odit deserunt sapiente! Culpa ut itaque perspiciatis totam omnis velit sequi similique aliquam, eos, quaerat magnam eum ad quo minima aut.
                </p>
                <p class="lead leftOne">leftOne</p>
                <p class="lead rightOne">leftOne</p>

            </div>
            <!--end first -->

             <!--start second -->
             <div class="changeText2 removeIt">
                <p class="lead text-info">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate rem quisquam, nostrum ex eum in ullam esse impedit accusantium nihil, tempora explicabo dignissimos quae ducimus facilis id, officiis quaerat odit deserunt sapiente! Culpa ut itaque perspiciatis totam omnis velit sequi similique aliquam, eos, quaerat magnam eum ad quo minima aut.
                </p>
            </div>
            <!--end second -->

            <!--start third -->
            <div class="changeText3 removeIt">
                <p class="lead text-warning" >
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate rem quisquam, nostrum ex eum in ullam esse impedit accusantium nihil, tempora explicabo dignissimos quae ducimus facilis id, officiis quaerat odit deserunt sapiente! Culpa ut itaque perspiciatis totam omnis velit sequi similique aliquam, eos, quaerat magnam eum ad quo minima aut.
                </p>
            </div>
            <!--end third -->

             <!--start four -->
             <div class="changeText4 removeIt">
                <p class="lead text-primary" >
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate rem quisquam, nostrum ex eum in ullam esse impedit accusantium nihil, tempora explicabo dignissimos quae ducimus facilis id, officiis quaerat odit deserunt sapiente! Culpa ut itaque perspiciatis totam omnis velit sequi similique aliquam, eos, quaerat magnam eum ad quo minima aut.
                </p>
            </div>
            <!--end four -->

            <button class="btn btn-outline-success mt-4 btnChangeText">Change text</button>


        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
