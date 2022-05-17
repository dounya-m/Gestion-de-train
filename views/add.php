
<?php
    if(isset($_POST['submit'])){

    $newVoyage = new VoyageController();
    $newVoyage->addVoyages();
}
?>


<?php 
    include_once './views/includes/dashboardNav.php';
?>

<div class="form">
    <div class="row my-4">
        <div class="col-md-7 mt-5 mb-5 mx-auto">
            <div class="card">
                <div class="card-body m-4">
                <a href="http://localhost/gestionTrain/dashboard" class="">
                    <i class="fas fa-home"></i>
                </a>
                <form method="post">
                    <div class="form-group mt-4">
                        <label for="date">Date de voyage</label>
                        <input id="current_date" type="date" name="date" class="form-control" placeholder="Date" required>
                    </div>

                    <div class="form-group">
                        <label for="gare-dep">Gare de depart</label>
                        <input type="text" name="garDep" class="form-control" placeholder="Gare de depart" required>
                    </div>

                    <div class="form-group">
                        <label for="gare-arr">Gare d'arrivée</label>
                        <input type="text" name="garArr" class="form-control" placeholder="Gare d'arriver" required>
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur de depart</label>
                        <input type="time" name="timeDep" class="form-control" placeholder="Heur de depart" required>
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Heur d'arrivée</label>
                        <input type="time" name="timeArr" class="form-control" placeholder="Heur d'arrivée" required>
                    </div>

                    <div class="form-group">
                        <label for="heur_depart">Prix</label>
                        <input type="number" name="prix" class="form-control" placeholder="Prix..." required>
                    </div>

                    <div class="form-group">
                        <label for="train">N° du Train</label>
                        <select name="Ntrain" id="Ntrain" class="form-control" required>
                            <option value="#">select</option>
                            <option value="1" name="Ntrain">nord</option>
                            <option value="2" name="Ntrain">ouest</option>

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
    <script>
        date = new Date();
        var tdate = date.getDate();
        var tmonth = date.getMonth() +1;
        if(tdate < 10){
            tdate = '0' + tdate ;
        }
        if(tmonth < 10){
            tmonth = '0' + tmonth;
        }
        var year = date.getUTCFullYear();
        var maxMont = 0 + +tmonth + +1;
        var tomorrow = tdate + 1;
        if(maxMont < 10){
            maxMont = '0' + maxMont;
        }
        var minDate = year + '-' + tmonth + '-' + tomorrow;
        var maxDate = year + '-' + maxMont + '-' + tdate;
        document.getElementById('current_date').setAttribute('min', minDate);
        document.getElementById('current_date').setAttribute('max', maxDate);
        console.log(maxDate);

        </script>
</div>