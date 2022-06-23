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
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "SELECT * FROM gebruikers WHERE username = :username";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":username", $_POST["username"]);
        $stmt -> execute();
        $result = $stmt -> fetchAll();

        foreach($result as $res)  { 
            if($_POST["password"] == $res["password"]) {
                $_SESSION["admin"] = $res ["admin"];
                break;
            }
        }
    }
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == '0'){
    echo '<script> alert("U bent ingelogd"); </script>';
}
?>
    <?php include("phpincludes/headertemplate.php")?>
    <main id="main-homepage">
        <div class="navbarfix">
            <?php include ("phpincludes/navbar.php")?>
            <!-- <div class = "opvulling"></div> -->
            <?php 
                                if (isset($_SESSION["rol"])) {
                                    echo '<li><a href="logout.php">logout</a></li>';
                                    if ($_SESSION["rol"]=== "admin") {
                                        echo '<li><a href="admin.php">admin</a></li>';
                                    }
                                }
                                else {
                                    echo '<li><a href="login.php">Login</a></li>';
                                } 
                                ?>
        </div>
        <div class="homepage-blok">
            <div class="searchblok">
                <div class="searchbar">

                    <form id="form" action="vluchtboeken.php" method="get">
                        <input type="search" id="search" name="search" placeholder="Search...">
                        <button type="sumbit" id="search-button">Search</button>
                    </form>

                </div>
            </div>
            <div class="homepage-contentblok">
                <h1 id="homepage-text">
                    De zonnigste
                    <br>
                    Bestemmingen
                </h1>
            </div>

            <div class="home-pageblok">
                <div id="slideshow">
                    <div class="vakantie-blok">
                        <div class="blok1">
                            <img id="vakantieimg" src="img/Australia.jpg" alt="">
                            <div class="vakantietekst">
                                <p class="tekstvakantie">Australia</p>
                            </div>
                        </div>
                        <div class="blok2">
                            <img id="vakantieimg2" src="img/weetjes-turkije.jpg" alt="">
                            <div class="vakantietekst">
                                <p class="tekstvakantie">turkije</p>
                            </div>
                        </div>
                    </div>
                    <div class="vakantie-blok">
                        <div class="blok1">
                            <img id="vakantieimg" src="img/mooievakantie.png" alt="">
                            <div class="vakantietekst">
                                <p class="tekstvakantie">turkije</p>
                            </div>
                        </div>
                        <div class="blok2">
                            <img id="vakantieimg2" src="img/spanjepart200.jpg" alt="">
                            <div class="vakantietekst">
                                <p class="tekstvakantie">spanje</p>
                            </div>
                        </div>
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