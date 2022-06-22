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
    <?php
    session_start();    
    include("phpincludes/headertemplate.php")?>
    <main>
        <?php include ("phpincludes/navbar.php")?>
        <div class="homepage-blok">
            <div class="searchblok">
                <div class="searchbar">

                    <form id="form" action="vlutchboeken.php" method="get">
                        <input type="search" id="search" name="search" placeholder="Search...">
                        <button type="sumbit">Search</button>
                    </form>

                </div>
                <?php
                                if (isset($_GET["search"])) {
                                    $search = "%".$_GET['search']."%";

                                    $sql = "SELECT * FROM reizen WHERE
                                    hotel LIKE :search";
                                    $stmt = $connect -> prepare($sql);
                                    $stmt -> bindParam(":search", $search);
                                    $stmt -> execute();
                                    $result = $stmt -> fetchAll();
                                } else {
                                    $sql = "SELECT * FROM reizen";
                                    $stmt = $connect -> prepare($sql);
                                    $stmt -> execute();
                                    $result = $stmt -> fetchAll();
                                }
                                    foreach($result as $res) {
                                ?>
                                <h3><?php echo $res['hotel']; ?></h3>
                <?php } ?>
            </div>
        <div class="contentblok2">
            <?php include ("phpincludes/reistemplate.php")?>
        </div>
    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>