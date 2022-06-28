<?php
    session_start();
    if(isset($_GET["search"])){
        $search = "%".$_GET['search']."%";

        $sql = "SELECT * FROM reizen WHERE hotel OR begindatum OR hotel_prijs OR einddatum OR sterren LIKE :search";
            $stmt = $connect -> prepare($sql);
            $stmt -> bindParam(":search", $search);
        } else {
            $sql = "SELECT * FROM reizen";
            $stmt = $connect -> prepare($sql);
        }
    

    // $sql = "SELECT * FROM menukaart";
    // $stmt = $connect -> prepare($sql);
    $stmt ->execute();
    $result = $stmt -> fetchAll();

    foreach($result as $res) {
?>


<div class="container1">
    <div class="fototemplatebox">
        <img id="fototemplate" src="<?php echo $res['image'] ?>">
    </div>
    <div class="tekstvakreistemplate">
    <p>datum:<p><?php echo $res["begindatum"]; ?></p><p>-->></p><?php echo $res["einddatum"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>hotel:<p><?php echo $res["hotel"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>prijs:<p><?php echo $res["hotel_prijs"]; ?></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>sterren:<p><?php echo $res["sterren"]; ?></p>
    </div>
    <!-- <div class  = "tekstvakreistemplate">
    <input type = "checkbox" name = "vervoer"> wilt u vervoer erbij boeken?
    </div> -->
    <div class="templateboekknop">
        <a href="phpincludes/boeken.php?gebruikerID=<?php echo $_SESSION['gebruikerID']; ?>&reisID=<?php echo $res['reisID']?>" class="buttontemplate">boeken!</a>
        <!-- <button type="submit" name="submit" value="Submit" action="phpincludes/boeken.php" class="buttontemplate">
        </button> -->
    </div>
</div>

<?php 
    }
?>