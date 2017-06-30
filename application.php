<!--necessary for the Logout button-->
<?php
    session_start();
    $istBenutzerAngemeldet = isset ($_SESSION['login_user']);
    if($istBenutzerAngemeldet){
        $urmail = $_SESSION['login_user'];
    }else{
        $urmail= '';
    }

?><!--stay angemeldet-->
<?php

include 'includes/insertUserQuestionA.php';


?><!--inserts-->
<?php
include_once 'includes/counter.php';//das ding muss noch durchzählen
$question = $counter;
?>
<?php
include 'includes/insertUserQuestionB.php';
?>
<!--counter-->

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-first -->

    <title>xor Application</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="scss/main.css" rel="stylesheet">
    <link href="scss/anwendung.css" rel="stylesheet">
    <link rel="icon" href="images/logo1.png">
    <script language="javascript" type="text/javascript" src="jQuery/jQuery.js"></script>
    <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/core.js" type="text/javascript"></script>
    <script src="js/newQuestion.js" type="text/javascript"></script>

</head>

<body>

<header>
    <div class="width">
        <img class="logo pixor" src="images/logo1.png">
        <img class="logo " src="images/logo2.png">

        <div class="socialmedia">

            <a href="https://www.facebook.com/" target="_blank">
                <img class="social" src="images/SocialMedia/facebook.png">
            </a>
            <a href="https://twitter.com/home?status=http%3A//localhost%3A63342/projectpiXOR/pixor/index.html?_ijt=54cl3c4kkejesav5ne75f2pcl1" target="_blank">
                <img class="social" src="images/SocialMedia/twitter.png">
            </a>
            <a href="https://plus.google.com/share?url=http%3A//localhost%3A63342/projectpiXOR/pixor/index.html?_ijt=54cl3c4kkejesav5ne75f2pcl1" target="_blank">
                <img class="social" src="images/SocialMedia/googleplus.png">
            </a>
        </div>
    </div>
</header>

<main>
    <div class="width">
        <div class="question" >
            <p id="question">
                <?php
                    include 'includes/dbconnect.php';
                include 'includes/questionDB.php';
                    echo $row['questionName'];
                ?>
            </p>
        </div>

        <div class="a">
            <form method="post" action="application.php">
                <button type="submit" class="selector" id="button1" name="answer1">
                    <?php
                        echo $row['answerA'];
                    ?>
                </button>
                <input type="hidden" name="questionid" class="questionId" value="<?php echo $questionId; ?>">
            </form>
        </div>
        <div class="b">
            <form method="post" action="application.php">
                <button type="submit" class="selector" id="button2" name="answer2">
                    <?php
                        echo $row['answerB'];
                    ?>
                </button>
                <input type="hidden" name="questionid" class="questionId" value="<?php echo $questionId; ?>">
            </form>
        </div>

        <div>
            <input type="submit" id="button3" name="continue" onclick="continuer();" value="Submit">
        </div>
    </div>
</main>

<footer>
    <div class="width">
<!--        Displays the mail.-->
        <div class="a" style="margin-left: -20px;">
            <p>Logged in as <b><?php echo $urmail; ?></b></p>
        </div>
<!--        Logout Button-->
        <?php if ($istBenutzerAngemeldet):?>
            <div class = "b" style="margin-right: -20px">
                <a href="logout.php"><button class="btn btn-default">Logout</button></a>
            </div>
        <?php endif; ?>
    </div>

</footer>

</body>
</html>