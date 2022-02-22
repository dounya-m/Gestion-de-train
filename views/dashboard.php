<?php
    include_once './views/includes/navBare.php';
?>
<?php


    $data = new VoyageController();
    $voyages = $data->getAllVoyage();
    print_r($voyages);

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Date</th>
                        <th scope="col">Départ</th>
                        <th scope="col">Arrivée</th>
                        <th scope="col">de</th>
                        <th scope="col">à</th>
                        <th scope="col">N° du Train</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <th scope="row"></th>
                        <th scope="row"></th>
                        <th scope="row"></th>
                        <th scope="row"></th>
                        <th scope="row"></th>
                        <th scope="row"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
