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
                <form name ="form" id="login" action="phpincludes/loginvalidate.php" method="post">
                <P>log hier in: </P><br>
                <input type="text" name="username" placeholder="username" ><br>
                <p>vul je wachtwoord in:</p><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="submit" value="submit" name="submit"> <p> nog geen account? klik <a href = "register.php">hier </a> om een account te maken</p><br>
                <p> wachtwoord vergeten? <a href = "passwordforgotten.php"> hier kunt u uw wachtwoord opnieuw aanvragen! </a> </p>
            </form>
            <form name = "form" id = "login" action = "logout.php">
                <input type = "submit" value= "submit" name = "submit">klik hier om uit te loggen </a>
            </form>
    </div>
</main>
<?php include("phpincludes/footertemplate.php")?>
<script src="js/inlog.js"></script>
</body>
</html>