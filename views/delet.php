<?php

if(isset($_POST["id"])){


    $existVoyage = new VoyageController();
    $voyage = $existVoyage -> deleteVoyage();

}



?>