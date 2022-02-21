<?php
    include_once './views/includes/navBare.php';
?>
<?php


    $data = new VoyageController();
    $voyages = $data->getAllVoyage();
    print_r($voyages);

?>
