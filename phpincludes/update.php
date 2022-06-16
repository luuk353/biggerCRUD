<?php

include_once("connect.php");

if(isset($_POST["edit"])){  
    $sql = "UPDATE reizen
        SET reisid = :reisid, hotel = :hotel, begindatum = :begindatum, einddatum= :einddatum, hotel_prijs = :hotel_prijs, sterren = :sterren, image = :image
        WHERE reisid = :reisid";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisid", $_POST["reisid"]);
    $stmt->bindParam(":hotel", $_POST["hotel"]);
    $stmt->bindParam(":begindatum", $_POST["begindatum"]);
    $stmt->bindParam(":einddatum", $_POST["einddatum"]);
    $stmt->bindParam(":hotel_prijs", $_POST["hotel_prijs"]);
    $stmt->bindParam(":sterren", $_POST["sterren"]);
    $stmt->bindParam(":image", $_POST["image"]);
    $stmt->execute();

    header("Location: ../vluchtboeken.php");
    exit();
}
else {
    header("Location: ../admin.php");
}


?>