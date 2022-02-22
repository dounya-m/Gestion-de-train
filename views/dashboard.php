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
        <div class="col mt-5-md-8 mx-auto">
            <table class="table mt-5 md-10 table-hover">
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
                <?php foreach($voyages as $voyage):?>
                <tr>
                    <th class="row"><?php echo $voyage['nom']; ?></th>
                    <td class="row"><?php echo $voyage['date']; ?></td>
                    <td class="row"><?php echo $voyage['heur_depar']; ?></td>
                    <td class="row"><?php echo $voyage['heur_arriver']; ?></td>
                    <td class="row"><?php echo $voyage['gare-dep']; ?></td>
                    <td class="row"><?php echo $voyage['gare-arr']; ?></td>
                    <td class="row"><?php echo $voyage['train']; ?></td>
                    
                </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
