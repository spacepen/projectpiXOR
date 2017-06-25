
<?php
    session_start();
    $istBenutzerAngemeldet = isset ($_SESSION['email']);
    if($istBenutzerAngemeldet){
        $urmail = $_SESSION['email'];
    }else{
        $urmail= '';
    }

//?><!--stay angemeldet-->
<?php

include 'includes/insertUserQuestionA.php';


?><!--inserts-->
<?php
include_once 'includes/counter.php';
//?>
<?php
include 'includes/insertUserQuestionB.php';
?>
<!--counter-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>anwendung</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="scss/main.css" rel="stylesheet">
    <link href="scss/anwendung.css" rel="stylesheet">
    <link rel="icon" href="images/logo1.png">
    <script language="javascript" type="text/javascript" src="jQuery/jQuery.js"></script>
    <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/core.js"></script>

</head>
<body>
<header>
    <div class="width">
        <img class="logo pixor" src="images/logo1.png">
        <img class="logo " src="images/logo2.png">

        <div class="socialmedia">
            <?php
            if ($istBenutzerAngemeldet):
                ?>
                <p class="social"><a href="logout.php">Logout</a></p>
                <?php
            endif;
            ?>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost%3A63342/projectpiXOR/pixor/index.html?_ijt=54cl3c4kkejesav5ne75f2pcl1">
                <img class="social" src="images/SocialMedia/facebook.png">
            </a>
            <a href="https://twitter.com/home?status=http%3A//localhost%3A63342/projectpiXOR/pixor/index.html?_ijt=54cl3c4kkejesav5ne75f2pcl1">
                <img class="social" src="images/SocialMedia/twitter.png">
            </a>
            <a href="https://plus.google.com/share?url=http%3A//localhost%3A63342/projectpiXOR/pixor/index.html?_ijt=54cl3c4kkejesav5ne75f2pcl1">
                <img class="social" src="images/SocialMedia/googleplus.png">
            </a>
        </div>
    </div>
</header>

<main>

    <p id="question">
        <?php
            include 'includes/dbconnect.php';
            $inhalt="questionName";
            $counter;
            include 'includes/questionDB.php';

        ?>
    </p>

    <form method="post">
    <button type="submit" id="button1" name="answer1" onclick= "buttonClick();">
        <?php
        include 'includes/dbconnect.php';
        $inhalt="answerA";
        include 'includes/questionDB.php';

        ?></button>
    </form>
    <form method="post">
    <button type="submit" id="button2" name="answer2" onclick="buttonClick();">
        <?php
        include 'includes/dbconnect.php';
        $inhalt="answerB";
        include 'includes/questionDB.php';

        ?></button>
    </form>
    <input type="submit" id="button3" name="continue"onclick="continuer();" value="Submit">
</main>
<footer>
    <dfn>© XOR, All rights reserved</dfn>
</footer>

</body>
</html>