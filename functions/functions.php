<?php

function insertQuery($firstName, $lastName, $email, $password) {
    
        global $conn;

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user_fname, user_lname, user_email, user_password) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$password."') ";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            session_regenerate_id();
            $_SESSION["registeredUser"] = true;
            $_SESSION["firstname"] = $firstName;
            $_SESSION["registredMsg"] = '<h1 class="text-center bg-success text-white successfullMsg">You have been registered succesfully</h1>';
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }



function registerErrors($firstName, $lastName, $email, $password, $registerCheckbox) {
        global $conn;

         $error = false;

        //start length error
        if (strlen($firstName) < 2) {
            $error = true;
            $_SESSION['fNameError'] = 'First name should have 2 characters at least';
        } else {
            unset( $_SESSION['fNameError']);
        }

        if (strlen($lastName) < 2) {
            $error = true;
            $_SESSION['lNameError'] = 'Last name should have 2 characters at least';
        } else {
            unset( $_SESSION['lNameError']);
        }

        if (strlen($email) < 3) {
            $error = true;
            $_SESSION['emailError'] = 'Email should have 3 characters at least';
        } else {
            unset( $_SESSION['emailError']);
        }


        if (strlen($password) < 6) {
            $error = true;
            $_SESSION['pwdError'] = 'Password should have 6 characters at least';
        } else {
            unset($_SESSION['pwdError']);
        }
        //end length error

        //check for valid email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $_SESSION['emailValid'] = "$email is not a valid email address";
          } else {
            unset($_SESSION['emailValid']);
        }

        //check if checkbox is checked
        if ($registerCheckbox == 0) {
            $error = true;
            $_SESSION['checkBoxChecked'] = "Please agree with terms";
        } else {
            unset($_SESSION['checkBoxChecked']);
        }

        //check if email exists
        //check that email doent exist in database
        $sql2 = "SELECT * FROM users WHERE user_email = '".$email."'";
        $emailUsed = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($emailUsed) > 0) {
            $error = true;
            $_SESSION['emailExist'] = "Email already exist";
        } else {
            unset($_SESSION['emailExist']);
        }

        return $error;
}

function loginSelect($loginEmail, $loginPwd) {
    global $conn;

    $query = "SELECT user_password FROM users WHERE user_email = '".$loginEmail."'
    LIMIT 1 ";

    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);

    if ($rows > 0) { 
        //check if password match
        
        if (password_verify($loginPwd, $rows["user_password"])) {
            //create session on successfull login
            $_SESSION['user_id'] = $loginEmail;
            $_SESSION['userLogged'] = true;
            $_SESSION['welcomeLogged'] = '<h2 class="text-center text-success py-3 welcomeLogged">Welcome,now you are logged in</h2>';
            header("Location: ../index.php");
        } else {
            echo "<p class='lead text-danger text-center'>Λάθος κωδικός</p>";
        }
    }  else {
        echo "<p class='lead text-danger text-center'>Λάθος στοιχεία</p>";
    }
}

function loginValidation($loginEmail, $loginPwd) {
    $error = false;

    //start length error
    if (strlen($loginEmail) < 3) {
        $error = true;
        $_SESSION['emailError'] = 'Email should be 6 characters at least';
    } else {
        unset( $_SESSION['emailError']);
    }

    if (strlen($loginPwd) < 6) {
        $error = true;
        $_SESSION['pwdError'] = 'Password cant be less than 6 characters';
    } else {
        unset( $_SESSION['pwdError']);
    }

    return $error;
}



function insertVotes($fullName, $email, $msgVote, $voteOne, $voteTwo, $voteThree, $voteFour, $voteFive, $voteSix) {
    
    global $conn;

    $sql = "INSERT INTO voters (full_name, email, text_message, vote_one, vote_two, vote_three, vote_four, vote_five, vote_six) VALUES ('".$fullName."', '".$email."', '".$msgVote."', '".$voteOne."', '".$voteTwo."', '".$voteThree."', '".$voteFour."', '".$voteFive."', '".$voteSix."') ";

    

     //check if email exists
        //check that email doent exist in database
        $sql2 = "SELECT * FROM voters WHERE email = '".$email."'";
        $emailUsed = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($emailUsed) > 0) {
            $error = true;
            header("Location: songs.php");
            exit();
        } else {
            
            $result = mysqli_query($conn, $sql);

            if ($result) {
                //
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
            mysqli_close($conn);
        }
}


function firstAvg() {
    global $conn;

    $sql3 = "SELECT AVG(vote_one) AS avg1, AVG(vote_two) AS avg2, AVG(vote_three) AS avg3, AVG(vote_four) AS avg4, AVG(vote_five) AS avg5, AVG(vote_six) AS avg6 FROM voters";
    $result = mysqli_query($conn, $sql3);

    while($row = mysqli_fetch_array($result)) {
        $_SESSION["resultsVote1"] =  round($row['avg1'],2) * 100;
        $_SESSION["resultsVote2"] =  round($row['avg2'],2) * 100;
        $_SESSION["resultsVote3"] =  round($row['avg3'],2) * 100;
        $_SESSION["resultsVote4"] =  round($row['avg4'],2) * 100;
        $_SESSION["resultsVote5"] =  round($row['avg5'],2) * 100;
        $_SESSION["resultsVote6"] =  round($row['avg6'],2) * 100;
    }

   
}