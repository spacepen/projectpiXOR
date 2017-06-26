<?php
include 'includes/login.php';
?>
<?php
include 'includes/newUserDB.php';
?>
<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-first -->
    <title>xor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="scss/main.css" rel="stylesheet">
    <link href="scss/home.css" rel="stylesheet">
    <link rel="icon" href="images/logo1.png">
    <script language="javascript" type="text/javascript" src="jQuery/jQuery.js"></script>
    <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/core.js"></script>
    <script src="js/strength.js"></script>

</head>
<body>

<header>
    <div class="width">
        <img class="logo pixor" src="images/logo1.png">
        <img class="logo " src="images/logo2.png">
        <div class="socialmedia">
            <a href="https://www.facebook.com/">
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
                    <input type=text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button class="btn btn-default" type="submit">Login</button>
                <!-- GetAccount Button Lightbox Class: button-->
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">
                    Get Account
                </button>
            </form>
                <?php if ($ifError && !$regsuccess && !$regfail): ?>
                    <div class="error">
                        <p>Falsche Eingabe! Bitte versuchen Sie es erneut.</p>
                    </div>
                <?php endif; ?>
                <?php if ($regfail): ?>
                    <div class="error">
                        <p>Bitte registrieren Sie sich mit einer Email-Adresse, die nicht bereits vergeben wurde.</p>
                    </div>
                <?php endif ?>

                <?php if ($regsuccess): ?>
                    <div class="regsuccess">
                        <p>Die Registrierung war erfolgreich!</p>
                    </div>
                <?php endif; ?>

        </div>


            <!-- Lightbox -->
            <div class="modal fade backlight" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <!--Class: Lightbox-->
                    <div class="modal-content lightbox">
                        <div class="modal-header">
                            <button type="button" class="close x" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title x" id="myModalLabel">Get Account</h4>
                        </div>
                        <form class="input-style" action="" method="post">
                            <b class="x">E-Mail:</b><br>
                            <input type="email" size="40" maxlength="250" class="form-control" name="email"><br><br>

                            <b class="x">Dein Passwort:</b><br>
                            <input type="password" size="40" maxlength="250" class="form-control" id="passwordCheck"name="passwort" ><br>

                            <b class="x">Passwort wiederholen:</b><br>
                            <input type="password" size="40" maxlength="250" class="form-control" name="passwort2"><br><br>

                            <input type="submit" class="btn btn-default" value="Registrieren">
                        </form>

                    </div>
                </div>
            </div>
        </div>
</main>
<footer>
    <i>XOR, 2017</i>
</footer>

</body>
</html>