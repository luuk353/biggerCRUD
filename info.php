<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>

        <?php 
        session_start();
        include("phpincludes/headertemplate.php")?>
        <main>
            <?php include ("phpincludes/navbar.php")?>

            <div class="about-container">

                <div class="about-us-title">
                    <h1>info over reis Bestemmingen</h1>
                </div>
                <div class="info-over-rijzen">
                    <div class="info-over-rijzen-blok">
                        <div class = "info-foto">
                            <img class = "info-foto-styling" src="img/turkijeINFO.jpg" alt="">
                            <div class = "info-bestemmingen-tekst">
                                <p>
                                Met trots presenteren wij Turkije:
                                een land boordevol verrassingen. Naast prachtige zon-, zee- en strandbestemmingen heeft ons land nog veel meer te bieden.
                                Lees in deze brochure de reisverhalen over bruisende steden,
                                de heerlijke keuken, de ongekende schoonheid van de natuur en de rijke cultuur.
                                Samen met de alom bekende Turkse gastvrijheid is Turkije een vakantiebestemming om je snel thuis te voelen.
                                Laat je inspireren en kom binnenkort ons land zelf ontdekken.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="info-over-rijzen-blok">
                        <img class = "info-foto-styling1" src="img/spanjepart200.jpg" alt="">
                        <div class = "info-bestemmingen-tekst">
                            <p>
                            Het Iberisch schiereiland is een groot levend museum:
                            in alle uithoeken van Spanje en Portugal vindt u ontzettend veel mooie cultuur- en kunstschatten.
                            Het Alhambra in Granada en de Torre de Belem zijn wellicht de bekendste,
                            maar er zijn nog zo veel onovertroffen schatten te ontdekken! In Madrid,
                            Bilbao en Lissabon geniet u van grootse kunst en struint u door sfeervolle straatjes en in Toledo
                            en Silves bewondert u immposante kastelen.
                            Laat u inspireren en ontdek méér van Spanje en Portugal met de reisleiders van BEPIS Reizen!
                            </p>
                        </div>
                    </div>
                    <div class="info-over-rijzen-blok">
                        <img class = "info-foto-styling2" src="img/asutraliaINFO1.jpg" alt="">
                        <div class = "info-bestemmingen-tekst">
                            <p>
                            rainforests to deserts, mountains to the world’s most impressive coral reef systems, this vast country 
                            provides a varied terrain and array of authentic experiences for the visitor. Despite its size, most of the 
                            country is virtually unpopulated and pristine, this coupled with a wonderful outdoor lifestyle 
                            contributes to a laid-back attitude, making travelling a real pleasure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <?php include("phpincludes/footertemplate.php")?>
    </body>

</html>