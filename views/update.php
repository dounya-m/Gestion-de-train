<?php
    include_once './views/includes/navBare.php';
?>
<?php
    if(isset($_POST['id'])){
    $existVoyage = new VoyageController();
    $voyage = $existVoyage->getOneVoyage();
    print_r($voyage);
   
}else if (isset($_POST["garDep"])){
echo "here";

} 

// die(var_dump($voyage));
?>

<div class="form">
    <div class="row my-4">
        <div class="col-md-7 mt-5 mb-5 mx-auto">
            <div class="card">
                <div class="card-body m-4">
                <a href="<?php echo BASE_URL;?>" class="">
                    <i class="fas fa-home"></i>
                </a>
                <form method="post">
                    <div class="form-group mt-4">
                        
                        <label for="date">Date de voyage</label>
                        <input type="date"  name="date" class="form-control" value="<?php echo $voyage->date ;?>">
                    </div>

                    <div class="form-group">
                        <label for="gare-dep">Gare de depart</label>
                        <input type="text" name="garDep" class="form-control" placeholder="Gare de depart"
                        value = "<?php echo $voyage->gare_dep; ?>"  >
                    </div>

                    <div class="form-group">
                        <label for="gare-arr">Gare d'arrivée</label>
                        <input type="text" name="garArr" class="form-control" placeholder="Gare d'arriver"
                        value="<?php echo $voyage->gare_arr; ?>">
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur de depart</label>
                        <input type="text" name="timeDep" class="form-control" placeholder="Heur de depart"
                        value="<?php echo $voyage->heur_depart; ?>">
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur d'arrivée</label>
                        <input type="text" name="timeArr" class="form-control" placeholder="Heur d'arrivée"
                        value="<?php echo $voyage->heur_arriver; ?>">
                    </div>

                    <div class="form-group">
                        <label for="train">N° du Train</label>
                        <select name="Ntrain" id="Ntrain" class="form-control">
                            <option value="#">select</option>
                            <option value="1" name="Ntrain" value="<?php echo $voyage->satatut ? 'selected' : ''; ?>">nord</option>
                            <option value="2" name="Ntrain"  value="<?php echo $voyage->satatut ? 'selected' : ''; ?>">ouest</option>

                        </select>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">
                            Valider
                        </button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once './views/includes/footer.php';
?>