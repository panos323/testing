<?php include_once "./includes/header.php";?>

    <div class="container">
        <div class="row py-5 text-center">

            <div class="col-md-12">
                <?php
                    if (isset($_SESSION["registredMsg"])) {
                        echo $_SESSION["registredMsg"];
                        unset($_SESSION["registredMsg"]);
                        echo "<br>";
                    } else if (isset($_SESSION["welcomeLogged"])) {
                        unset($_SESSION["registredMsg"]);
                        echo $_SESSION['welcomeLogged'];
                        unset($_SESSION["welcomeLogged"]);
                        echo "<br>";
                    } 
                ?>

                <!--start jumbotron -->
                <div class="jumbotron" id="customJumbotron">
                    <h1 class="display-4">Hello
                    <?php
                        if (isset($_SESSION["firstname"])) {
                            echo $_SESSION["firstname"];
                        } else {
                            echo 'guest';
                        }
                    ?>
                    </h1>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam rerum earum sunt doloribus temporibus adipisci architecto maxime, perspiciatis molestiae, veritatis itaque modi inventore, dolorum asperiores.</p>
                    <hr class="my-3">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod rerum quia in?</p>
                    <a class="btn btn-outline-warning btn-lg" href="#" role="button">Learn more</a>
                </div>
                <!--end jumbotron -->
            </div><!--col-->
        </div><!--row-->

        <div class="row py-5 text-center">
            <div class="col-md-12">
                        
            <!--start Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/3)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/4)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/5)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/6)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/7)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/8)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/9)"></div>
                <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/10)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!--end Swiper -->

            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container-->


<?php include_once "./includes/footer.php";?>