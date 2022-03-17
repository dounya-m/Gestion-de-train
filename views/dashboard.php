<?php 
    //  var_dump($_SESSION);
    include_once './views/includes/dashboardNav.php';
?>

<?php

    $data = new VoyageController();
    $voyages = $data->getAllVoyage();

?>
    <section class= "d-flex" >
<div class="container col-12">
    <div class="row">
        <div class=" mt-5  mx-auto">
        <div class="card">
                <div class="card-body">
            <a href="<?php echo BASE_URL;?>add" class="">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table  mt-5 table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th class="text-center" scope="col">Départ</th>
                        <th class="text-center" scope="col">Arrivée</th>
                        <th class="text-center" scope="col">de</th>
                        <th class="text-center" scope="col">à</th>
                        <th class="text-center" scope="col">N° du Train</th>
                        <th class="text-center" scope="col">Nom Train</th>
                        <th class="text-center" scope="col">1ere classe</th>
                        <th class="text-center" scope="col">2eme classe</th>
                        <th class="text-center" scope="col">Prix</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($voyages as $voyage):?>
                <tr>
                    <th scope="row"><?php echo $voyage['date']; ?></th>
                    <td class="text-center"><?php echo $voyage['heur_depart']; ?></td>
                    <td class="text-center"><?php echo $voyage['heur_arriver']; ?></td>
                    <td class="text-center"><?php echo $voyage['gare_dep']; ?></td>
                    <td class="text-center"><?php echo $voyage['gare_arr']; ?></td>
                    <td class="text-center"><?php echo $voyage['train']; ?></td>
                    <td class="text-center"><?php echo $voyage['nom']; ?></td>
                    <td class="text-center"><?php echo $voyage['first_class']; ?></td>
                    <td class="text-center"><?php echo $voyage['second_class']; ?></td>
                    <td class="text-center"><?php echo $voyage['prix']; ?>dh</td>

                    
                <td class="d-flex">
                <form action="update" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn btn-sm btn-light">update</button>
                    </form>
                    <form action="delet" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn btn-sm btn-primary">delete</button>
                    </form>
                </td>
                </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
</section>



