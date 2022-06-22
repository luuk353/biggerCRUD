<!DOCTYPE html>
<html lang="en">

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
    include ("phpincludes/connect.php");
    $sql = "SELECT * FROM boekingen WHERE boekingID = :boekingID";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":boekingID", $_GET["boekingID"]);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
    ?>

    <?php include("phpincludes/headertemplate.php")?>
    <main>
        <?php include ("phpincludes/navbar.php")?>
        <div class="contentblok">
            <div class="mijnboekingen">
                <div class="mijnboekingentabel">
                    <h1>boekingen</h1>
                    <table>
                        <tr>
                            <th>reizen</th>
                        </tr>
                        <?php 
                    $sql = "SELECT * FROM boekingen";
                    $stmt = $connect -> prepare($sql);
                    $stmt ->execute();
                    $result = $stmt -> fetchAll();

                    foreach($result as $res) {
                        echo "<tr>";
                        echo "<td>".$res["boekingID"]."</td>";
                        echo "<td>".$res["reisID"]."</td>";
                        echo "</tr>";
                    }
                ?>
                    </table>
                </div>




            </div>
        </div>
    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>