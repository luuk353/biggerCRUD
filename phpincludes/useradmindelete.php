<?php
include_once ("connect.php");
if(isset($_POST["delete"])) {
        $sql = "DELETE FROM boekingen   
                WHERE boekingID = :boekingID";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":boekingID", $_POST["boekingID"]);
        $stmt -> execute();

        header("Location:../admin.php");
        exit();
}
else {
    header("Location: ../admin.php");

}


?>