<?php
include_once("connect.php");
 
if(isset($_POST["delete"])){
    $sql = "DELETE FROM gebruikers
            WHERE gebruikerID = :gebruikerID";
            $stmt = $connect -> prepare($sql);
            $stmt -> bindParam(":gebruikerID", $_POST["gebruikerID"]);
            $stmt -> execute();

            header("Location:../admin.php");
            exit();
}
else {
    echo "er is iets fout gino";
}