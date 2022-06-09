<?php
    include_once('phpincludes/connect.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("phpincludes/headertemplate.php")?>
    <main id="main-homepage">
        <?php include ("phpincludes/navbar.php")?>
        <div class="homepage-blok">
            <div class="homepage-contentblok">
                <h1 id="homepage-text">
                    De zonnigste
                    <br>
                    Bestemmingen
                </h1>
            </div>
            
            <div class ="home-pageblok">
                <div id="slideshow">
                    <div class="vakantie-blok">
                        <div class="vakantieblok-foto">
                        
                        </div class="vakantieblok-tekst">
                        <div>

                        </div>
                    </div>

                    <div class="vakantie-blok">
                        <p>vakantie2</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("phpincludes/footertemplate.php")?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slideshow.js"></script>
    

</body>

</html>