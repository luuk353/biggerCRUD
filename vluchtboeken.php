<!DOCTYPE html>
<html lang="en">

<?php include_once("phpincludes/connect.php")?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Website</title>
</head>

<body>
    <?php include("phpincludes/headertemplate.php")?>
    <main>
        <?php include ("phpincludes/navbar.php")?>
        <div class="contentblok2">
            <div class="container-vluchtboeken">
                <?php include ("phpincludes/reistemplate.php")?>
            </div>
            <div class="container-vluchtboeken2">
                <?php include ("phpincludes/reistemplate.php")?>
            </div>
        </div>
    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>