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
                    </table>
                         
                    <?php 
                    $sql = "SELECT * FROM boekingen WHERE gebruikerID =:gebruikerID";
                    $stmt = $connect -> prepare($sql);
                    $stmt -> bindParam(":gebruikerID",$_SESSION['gebruikerID']);
                    $stmt ->execute();
                    $boekingen = $stmt -> fetchAll();

                    foreach($boekingen as $boeking){
                        $sql = "SELECT * FROM reizen WHERE reisID = :reisID";
                        $stmt = $connect -> prepare($sql);
                        $stmt -> bindParam(":reisID", $boeking["reisID"]);
                        $stmt -> execute();
                        $result = $stmt -> fetch();

                        if($result){ ?>
                        <p> <?php echo "Hotelnaam:".ucfirst($result['hotel'])."   |    HotelPrijs".ucfirst($result['hotel_prijs'])."   |   ".ucfirst($result['begindatum'])."   |   ".ucfirst($result['einddatum']);?>     
                        <?php } 
                }?>
                    
                    
                </div>
            </div>
        </div>
    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>