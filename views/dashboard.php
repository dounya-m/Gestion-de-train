<?php 
    //  var_dump($_SESSION);
    include_once './views/includes/dashboardNav.php';
?>

<?php

    $data = new VoyageController();
    $voyages = $data->getAllVoyage();

?>
<?php
    $date  = new VoyageController();
    $delete = $date->deleteVoyageOld();
?>


    <section class= "d-flex" >
<div class="container col-12 ">
    <div class="row">
        <div class=" mt-5  mx-auto">
        <div class="card">
                <div class="card-body">
            <a href="<?php echo BASE_URL;?>add" class="">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table  mt-5 table-hover ">
                <thead>
                    <tr class="row mx-auto">
                        <th scope="col">Date</th>
                        <th class="text-center col">Départ</th>
                        <th class="text-center col">Arrivée</th>
                        <th class="text-center col">de</th>
                        <th class="text-center col">à</th>
                        <th class="text-center col">Nom Train</th>
                        <th class="text-center col">N°de places</th>
                        <th class="text-center col">Prix</th>
                        <th class="text-center col"></th>
                        <th class="text-center col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($voyages as $voyage):?>
                <tr  class="row mx-auto">
                    <th><?php echo $voyage['date']; ?></th>
                    <td class="text-center col"><?php echo $voyage['heur_depart']; ?></td>
                    <td class="text-center col"><?php echo $voyage['heur_arriver']; ?></td>
                    <td class="text-center col"><?php echo $voyage['gare_dep']; ?></td>
                    <td class="text-center col"><?php echo $voyage['gare_arr']; ?></td>
                    <td class="text-center col"><?php echo $voyage['nom']; ?></td>
                    <td class="text-center col"><?php echo $voyage['first_class']; ?></td>
                    <td class="text-center col"><?php echo $voyage['prix']; ?>dh</td>

                    
                <td class="d-flex col">
                <form action="update" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn btn-sm btn-light">update</button>
                    </form>
                    <form action="state" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn ml-2 mr-2 btn-sm btn-primary">Annuler</button>

                    </form>
                </td>
                </tr>
                <?php endforeach?>
                </tbody>
                <form action="" method="post">
                        <button class="btn btn-sm btn-primary ml-3" type="submit" name="submit">delete older</button>
                    </form>
                    <form action="archive" method="post">
                        <button class="btn btn-sm btn-primary ml-3" type="submit" name="submit"><a class="text-light" href="./archive">Archive</a></button>
                    </form>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</section>



