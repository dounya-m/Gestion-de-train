<?php

if(isset($_POST["id"])){
    $existVoyage = new VoyageController();
    $existVoyage->updateStateVoyage();
    header('location: ./dashboard');
}else{
    echo 'errorrrrrrrrrrrrrrrrrr';
}
?>