<?php
    include_once './views/includes/navBare.php';
?>
<?php
    if(isset($_POST['submit'])){

    $newVoyage = new VoyageController();
    $newVoyage->addVoyages();
}
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
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>

                    <div class="form-group">
                        <label for="gare-dep">Gare de depart</label>
                        <input type="text" name="garDep" class="form-control" placeholder="Gare de depart">
                    </div>

                    <div class="form-group">
                        <label for="gare-arr">Gare d'arrivée</label>
                        <input type="text" name="garArr" class="form-control" placeholder="Gare d'arriver">
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur de depart</label>
                        <input type="time" name="timeDep" class="form-control" placeholder="Heur de depart">
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur d'arrivée</label>
                        <input type="time" name="timeArr" class="form-control" placeholder="Heur d'arrivée">
                    </div>

                    <div class="form-group">
                        <label for="train">N° du Train</label>
                        <input type="number" name="Ntrain" class="form-control" placeholder="écrire...">
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