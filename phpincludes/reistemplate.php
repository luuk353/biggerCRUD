<?php 
    if(isset($_GET["search"])){
        $search = "%".$_GET['search']."%";

        $sql = "SELECT * FROM reizen WHERE name LIKE :search";
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
    <div class="templateboekknop">
        <button class="buttontemplate">
            <p>boeken!</p>
        </button>
    </div>
</div>

<?php 
    }
?>