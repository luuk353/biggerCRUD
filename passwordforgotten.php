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
                <form name ="form" id="formulier" action="phpincludes/sendingpassword.php" method="post">
                <P>vul uw forgotcode in: </P><br>
                <input type="text" name="forgotcode" placeholder="forgotcode" ><br>
                <p>vul uw gebruikersnaam in:</p><br>
                <input type="text" name="username" placeholder="username"><br>
                <input type="submit" value="submit" name="submit"> <p> wilt u een account maken? klik <a href = "register.php">hier </a></p><br>
                <p> herrinert u zich toch uw wachtwoord? <a href = "passwordforgotten.php"> hier </a>kunt u terug naar de inlogpagina. </p>
                
    
            </form>
    </div>
</main>
<?php include("phpincludes/footertemplate.php")?>
<script src="js/inlog.js"></script>
</body>
</html>