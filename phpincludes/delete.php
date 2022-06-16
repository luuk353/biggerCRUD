<?php

include_once ("connect.php");
if(isset($_POST["delete"])) {
        $sql = "DELETE FROM reizen
                WHERE reisid = :reisid";
        $stmt = $connect -> prepare($sql);
        $stmt -> bindParam(":reisid", $_POST["reisid"]);
        $stmt -> execute();

        header("Location:../vluchtboeken.php");
        exit();
}
else {
    header("Location: ../admin.php");

}


?>