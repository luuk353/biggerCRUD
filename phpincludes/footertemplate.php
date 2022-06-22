<?php 
include_once("connect.php");
?>
<footer>
    <div id="account-profile" href="myaccount.php">
        <a href = 'myaccount.php'><img id="profileiconfooter" src="img/profile.png" alt=""></a>
       <?php
       if(isset($_SESSION["username"])) {
        echo $_SESSION["username"];
       }
         else{
            echo '<p> u bent nog niet ingelogd! </p>';
         }
         if(isset($_SESSION["admin"]) && $_SESSION["admin"] == '1') {
          echo "<div id='account-profile' href='admin.php'>
        <a href = 'admin.php'><img id='profileiconfooter' src='img/profile.png' alt=''></a><p>adminpage</p>";}
        
       ?>
    </div>
</footer>