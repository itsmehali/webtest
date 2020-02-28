<?php
require_once 'includes/autoload.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Austria Website</title>
    <link rel="stylesheet" href="css/resetstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/main.js"></script>
</head>
<body class="signup">

<?php
require 'header.php';
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
            /*
            if (isset($_GET['error'])) {
                $error = $_GET['error'];

                if ($error === 'emptyfields') {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                } elseif ($error === 'usertaken') {
                    echo '<p class="signuperror">Username is already taken!</p>';
                } elseif ($_GET['signup'] === 'succes') {
                    echo '<p class="signupsucces">Signup successful!</p>';
                }
            }*/
            /*
            if (isset($_GET['error'])) {
                if($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }
                else if($_GET_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }
                else if($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if($_GET["error"] == "invalidemail") {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }
                else if($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }
                else if($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
            } 
            
            */
            ?>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>

</main>

<?php
require 'footer.php';
?>

</body>
</html>
