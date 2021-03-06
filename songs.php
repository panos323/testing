<?php include_once "includes/header.php"; ?>

<?php



    if (isset($_SESSION['firstVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = 1;
        $voteTwo = isset($_POST['btn2']);
        $voteThree = isset($_POST['btn3']);
        $voteFour = isset($_POST['btn4']);
        $voteFive = isset($_POST['btn5']);
        $voteSix = isset($_POST['btn6']);

        $check = insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);

        if (!$check) {
            setcookie('firstChoice', '1', time() + (86400 * 30), "/"); // 86400 = 1 day

        } 
        
    }

    if (isset($_SESSION['secondVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = isset($_POST['btn1']);
        $voteTwo = 1;
        $voteThree = isset($_POST['btn3']);
        $voteFour = isset($_POST['btn4']);
        $voteFive = isset($_POST['btn5']);
        $voteSix = isset($_POST['btn6']);

        insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);
    }

    if (isset($_SESSION['thirdVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = isset($_POST['btn1']);
        $voteTwo = isset($_POST['btn2']);
        $voteThree = 1;
        $voteFour = isset($_POST['btn4']);
        $voteFive = isset($_POST['btn5']);
        $voteSix = isset($_POST['btn6']);

        insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);
    }

    if (isset($_SESSION['fourthVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = isset($_POST['btn1']);
        $voteTwo = isset($_POST['btn2']);
        $voteThree = isset($_POST['btn3']);
        $voteFour = 1;
        $voteFive = isset($_POST['btn5']);
        $voteSix = isset($_POST['btn6']);

        insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);
    }

    if (isset($_SESSION['fifthVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = isset($_POST['btn1']);
        $voteTwo = isset($_POST['btn2']);
        $voteThree = isset($_POST['btn3']);
        $voteFour = isset($_POST['btn4']);
        $voteFive = 1;
        $voteSix = isset($_POST['btn6']);

        insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);
    }

    if (isset($_SESSION['sixthVote']) && isset($_POST['vote-btn'])) {
        require "functions/db.php";
        require "functions/functions.php";

        $fullName = htmlspecialchars(trim($_POST["nameVote"]));
        $email = htmlspecialchars(trim($_POST["emailVote"]));
        $msgVote = htmlspecialchars(trim($_POST["msgVote"]));

        $voteOne = isset($_POST['btn1']);
        $voteTwo = isset($_POST['btn2']);
        $voteThree = isset($_POST['btn3']);
        $voteFour = isset($_POST['btn4']);
        $voteFive = isset($_POST['btn5']);
        $voteSix = 1;

        insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix);
    }

?>

    <div class="container  py-5">
        <div class="row py-4">
            <div class="col-md-12">
                <h1 class="text-center bg-danger text-white" style="border-radius:25px; padding:8px 0;">Vote the song(s) you like more</h1>
            </div>
        </div><!--row-->
        
        <div class="row text-center">
            <div class="col-md-12">
                <!--start card group-->
                <div class="card-group">
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JTc1mDieQI8" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Mozart - Symphony No.40</h5>
                        <p class="card-text">Symphony No. 40 in G minor, KV. 550 was written by Wolfgang Amadeus Mozart in 1788. It is sometimes referred to as the "Great G minor symphony", to distinguish it from the "Little G minor symphony", No. 25. The two are the only extant minor key symphonies Mozart wrote.
                        The date of completion of this symphony is known exactly, since Mozart in his mature years kept a full catalog of his completed works; he entered the 40th Symphony into it on 25 July 1788.
                        </p>
                        <?php if (isset($_COOKIE['firstChoice'])) { ?>
                            <button disabled class="btn btn-outline-danger btn-block" id="voteOneBtn" name="btn1">Thanks for voting</button>
                        <?php } else { ?>
                        <form action="thx.php" method="POST">
                            <button class="btn btn-outline-danger btn-block" id="voteOneBtn" name="btn1">Vote</button>
                        </form>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t3217H8JppI" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Beethoven - Symphony No. 9</h5>
                        <p class="card-text">The Symphony No. 9 in D minor, Op. 125, also known as Beethoven's 9th, is the final complete symphony by Ludwig van Beethoven, composed between 1822 and 1824. It was first performed in Vienna on 7 May 1824. One of the best-known works in common practice music,it is regarded by many critics and musicologists as one of Beethoven's greatest works and one of the supreme achievements in the history of western music.In the 2010s, it stands as one of the most performed symphonies in the world.</p>
                        <form action="thx.php" method="POST">
                        <button class="btn btn-outline-danger btn-block" name="btn2">Vote</button>
                        </form>
                        </div>
                    </div>
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GGU1P6lBW6Q" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Richard Wagner - Ride Of The Valkyries</h5>
                        <p class="card-text">
                        The "Ride of the Valkyries" (German: Walkürenritt or Ritt der Walküren) refers to the beginning of act 3 of Die Walküre, the second of the four operas constituting Richard Wagner's Der Ring des Nibelungen.
                        As a separate piece, the "Ride" is often heard in a purely instrumental version, which may be as short as three minutes. Together with the "Bridal Chorus" from Lohengrin, the "Ride of the Valkyries" is one of Wagner's best-known pieces.</p>
                        <form action="thx.php" method="POST">
                        <button class="btn btn-outline-danger btn-block" name="btn3">Vote</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end card group -->
            </div><!--col-md-12-->


            <div class="col-md-12 pt-3">
                <!--start card group-->
                <div class="card-group">
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mmCnQDUSO4I" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Dmitri Shostakovich - Waltz No. 2</h5>
                        <p class="card-text">The Suite for Jazz Orchestra No. 2 (Russian: Сюита для джазового оркестра №2) is a suite by Dmitri Shostakovich. It was written in 1938 for the newly founded State Jazz Orchestra of Victor Knushevitsky, and was premiered on 28 November 1938 in Moscow (Moscow Radio) by the State Jazz Orchestra. The score was lost during World War II, but a piano score of the work was rediscovered in 1999 by Manashir Yakubov. Three movements of the suite were reconstructed and orchestrated by Gerard McBurney, and were premiered at a London Promenade Concert in 2000.
                        </p>
                        <form action="thx.php" method="POST">
                        <button class="btn btn-outline-danger btn-block" name="btn4">Vote</button>
                        </form>
                        </div>
                    </div>
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/t3217H8JppI" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Vivaldi - Four Seasons</h5>
                        <p class="card-text">The Four Seasons (Italian: Le quattro stagioni) is a group of four violin concerti by Italian composer Antonio Vivaldi, each of which gives musical expression to a season of the year. They were written around 1716-1717 and were published in 1725 in Amsterdam, together with eight additional concerti, as Il cimento dell'armonia e dell'inventione ("The Contest Between Harmony and Invention").The Four Seasons is the best known of Vivaldi's works.Unusually for the period, Vivaldi published the concerti with accompanying sonnets (possibly written by the composer himself) that elucidated what it was in the spirit of each season that his music was intended to evoke.</p>
                        <form action="thx.php" method="POST">
                        <button class="btn btn-outline-danger btn-block" name="btn5">Vote</button>
                        </form>
                        </div>
                    </div>
                    <div class="card">
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GGU1P6lBW6Q" allowfullscreen></iframe>
                    </div> -->
                        <div class="card-body">
                        <h5 class="card-title">Mozart - Lacrimosa</h5>
                        <p class="card-text">
                        The Requiem in D minor, K. 626, is a requiem mass by Wolfgang Amadeus Mozart (1756–1791). Mozart composed part of the Requiem in Vienna in late 1791, but it was unfinished at his death on 5 December the same year. A completed version dated 1792 by Franz Xaver Süssmayr was delivered to Count Franz von Walsegg, who commissioned the piece for a Requiem service to commemorate the anniversary of his wife's death on 14 February.
                        The autograph manuscript shows the finished and orchestrated Introit in Mozart's hand, and detailed drafts of the Kyrie and the sequence Dies irae as far as the first eight bars of the Lacrimosa movement, and the Offertory. </p>
                        <form action="thx.php" method="POST">
                        <button class="btn btn-outline-danger btn-block" name="btn6">Vote</button>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end card group -->
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row pt-5">
            <div class="col-md-12">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nameVote">Full Name</label>
                    <input type="text" class="form-control" id="nameVote" name="nameVote">
                </div>
                <div class="form-group">
                    <label for="emailVote">Email address</label>
                    <input type="email" class="form-control" id="emailVote" aria-describedby="emailHelp" name="emailVote">
                </div>
                <div class="form-group">
                    <label for="msgVote">Leave your message (if you want)</label>
                    <textarea class="form-control" id="msgVote" rows="3" name="msgVote"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success btn-block" name="vote-btn">Submit</button>
            </form>
            </div>
        </div><!--row-->
    </div><!--container-->



  

<?php include_once "includes/footer.php"; ?>
