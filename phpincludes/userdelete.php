<?php
include_once ("connect.php");
if(isset($_POST["delete"])) {
        $sql = "DELETE FROM boekingen   
                WHERE reisID = :reisID";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":reisID", $_POST["reisID"]);
        $stmt -> execute();

        header("Location:../myaccount.php");
        exit();
}
else {
    header("Location: ../myaccount.php");

}


?>