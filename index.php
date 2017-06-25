<?php
    include 'includes/login.php';
?>
<?php
    include 'includes/newUserDB.php';
?>
<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="scss/main.css" rel="stylesheet">
    <link href="scss/home.css" rel="stylesheet">
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
    <div class="width">

        <!--Loginbox-->
        <div class="loginbox">
            <form action="" method="POST">
                <div class="form-group">
                    <input type=text" class="form-control" id="email" name="email" placeholder="Email"  >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit">Login</button>
                <!-- GetAccount Button Lightbox Class: button-->
                <button type="button"  data-toggle="modal" data-target="#myModal">
                    Get Account
                </button>
            </form>
        </div>

        <?php if ($ifError&&!$regsuccess&&!$regfail):?>
            <p>Falsche Eingabe</p>
            <?php
        endif;
        ?>

        <?php if ($regsuccess):?>
            <p>Successfull registration</p>
            <?php
        endif;
        ?>
        <?php if($regfail):?>
            <p>Bitte verwenden sie ein nocch nicht verwendet email adresse.</p>
        <?php endif ?>
        <!-- Lightbox -->
        <div class="modal fade backlight" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <!--Class: Lightbox-->
                <div class="modal-content lightbox">
                    <div class="modal-header">
                      <button type="button" class="close x" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Get Account</h4>
                    </div>
                    <form action="" method="post">
                        E-Mail:<br>
                        <input type="email" size="40" maxlength="250" name="email"><br><br>

                        Dein Passwort:<br>
                        <input type="password" size="40"  maxlength="250" name="passwort"><br>

                        Passwort wiederholen:<br>
                        <input type="password" size="40" maxlength="250" name="passwort2"><br><br>

                        <input type="submit" value="Registrieren">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <dfn>© XOR, All rights reserved</dfn>
</footer>

</body>
</html>