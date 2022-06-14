<?php
    if (isset($_GET["search"])) {
    $search = "%".$_GET['search']."%";

    $sql = "SELECT * FROM reizen WHERE
    name LIKE :search";
    $stmt = $connect -> prepare($sql);
    $stmt -> bindParam(":search",$search);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
    } else {
    $sql = "SELECT * FROM reizen";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
    }
    foreach($result as $res) {
    }
?>









<div class="container1">
    <div class="fototemplatebox">
        <img id="fototemplate" src="<?php echo $res['fotolink'] ?>">
    </div>
    <div class="tekstvakreistemplate">
    <p>datum:<p><?php echo $res["begindatum"]; ?></p><p><?php echo $res["eindatum"]; ?></p></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>hotel:<p><?php echo $res["hotel"]; ?></p></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>prijs:<p><?php echo $res["hotel_prijs"]; ?></p></p>
    </div>
    <div class="tekstvakreistemplate">
    <p>sterren:<p><?php echo $res["sterren"]; ?></p></p>
    </div>
    <div class="templateboekknop">
        <button class="buttontemplate">
            <p>boeken!</p>
        </button>
    </div>
</div>