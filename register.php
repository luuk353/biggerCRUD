<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
    <?php include("phpincludes/headertemplate.php")?>
</head>
<body>
    <main>
        <?php
        session_start();
        include ("phpincludes/navbar.php")?>
    <div class="contentblok">
                <form name ="form" id="formulier-register" action="phpincludes/accountcreation.php" method="post">
                <P>maak hier uw account aan: </P><br>
                <input type="text" name="username" placeholder="username" ><br>
                <p>maak hier uw wachtwoord aan:</p><br>
                <input type="password" name="password" placeholder="password"><br>
                <p> maak hier uw forgotcode aan, BEWAAR DEZE GOED!<br>(maximaal 5 cijfers)</p><br>
                <input type = "password" name = "forgotcode" placeholder = "forgotcode"> <br>
                <input type="submit" value="submit" name="submit"> <p> heeft u al een account? klik <a href = "login.php">hier </a>om in te loggen.</p>
    
            </form>
    </div>
</main>
<?php include("phpincludes/footertemplate.php")?>
<script src="js/inlog.js"></script>
</body>
</html>