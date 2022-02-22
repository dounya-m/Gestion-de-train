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
        <div class="card">
                <div class="card-body">
            <a href="<?php echo BASE_URL;?>add" class="">
                <i class="fas fa-plus"></i>
            </a>
            <table class="table mt-5 md-10 table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Départ</th>
                        <th scope="col">Arrivée</th>
                        <th scope="col">de</th>
                        <th scope="col">à</th>
                        <th scope="col">N° du Train</th>
                        <th scope="col">1ere classe</th>
                        <th scope="col">2eme classe</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($voyages as $voyage):?>
                <tr>
                    <th class="row"><?php echo $voyage['date']; ?></th>
                    <td class="row"><?php echo $voyage['heur_depar']; ?></td>
                    <td class="row"><?php echo $voyage['heur_arriver']; ?></td>
                    <td class="row"><?php echo $voyage['gare-dep']; ?></td>
                    <td class="row"><?php echo $voyage['gare-arr']; ?></td>
                    <td class="row"><?php echo $voyage['train']; ?></td>
                    <td class="row"><?php echo $voyage['1Classe']; ?></td>
                    <td class="row"><?php echo $voyage['2Classe']; ?></td>

                    
                <td>
                <form action="update" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn btn-sm btn-warning">add</button>
                    </form>
                    <form action="delet" method="post" >
                        <input type="hidden" name="id" 
                        value="<?php echo $voyage['id']; ?>">
                        <button class="btn btn-sm btn-danger">delete</button>
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
<?php
    include_once './views/includes/footer.php';
?>


