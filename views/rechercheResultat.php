<?php
    
if(isset($_POST['submit'])){
    $rechercheVoyage = new VoyageController();
    $data = $rechercheVoyage->findVoyage();
}
?>
<?php
    
    if(isset($_POST['reserver'])){

    $reserver = new VoyageController();
    $reserver->reserverDirection();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="header">
    <?php
    include_once './views/includes/navBare.php';
    ?>
    </section>

    <main class="recherchResult mt-5">
        <h1 class="text-center font-weight-bold">Les voyages Disponibles</h1>

        <section class="destination mt-5 d-flex align-items-center justify-content-center">
            <img  src="./public/icones/train.svg" alt="trainIcone">
            <hr>
            <div class="distanation_depart">
                <h3>Ville du depart</h3>
                <p> <?php echo $data[0]['gare_dep']; ?> </p>
            </div>
            <img src="./public/icones/distanation.svg" alt="trainIcone">

            <div class="distanation_Arr">
                <h3>Ville d'Arrivée</h3>
                <p><?php echo $data[0]['gare_arr']; ?></p>
            </div>
        </section>
    <!-- <form action="" method="post"> -->
        <section class="resultats d-flex justify-content-center align-items-center m-3 mt-5">
        <?php foreach($data as $voyage):?>
            <?php if($voyage['heur_depart']>date('h:i', strtotime('-1 hour'))  || $voyage['date']>date("Y-m-d", time())){?>
            <div class="card" style="width: 25rem;">
            <?php if($voyage['heur_depart'] >= "08:00" && $voyage['heur_depart'] <= "20:00"){ ?>
        <img class="card-img-top" src="./public/images/morning.webp" alt="Card image cap">
                    <?php } else {?>
                        <img class="card-img-top" src="./public/images/B.webp" alt="Card image cap">
            <?php }?>
        <div class="card-body">
            <div class="time d-flex align-items-center justify-content-center">
            <h5><?php echo $voyage['heur_depart']; ?></h5>
            <p>8h12min</p>
            <h5><?php echo $voyage['heur_arriver']; ?></h5>
            </div>
            <hr>
            <div class="classe d-flex justify-content-between">
            <p>Prix</p>
            <p><?php echo $voyage['prix']; ?>DH</p>
            </div>
            <form action="" method="post">

            <a href="./reservation?id=<?=$voyage['id']?>&depart=<?=$voyage["gare_dep"]?>&arrive=<?=$voyage["gare_arr"]?>&prix=<?=$voyage["prix"]?>" class="btn btn-primary" name="reserver" >Réserver</a>

        </div>
        </div>
        <?php }?>
            <?php endforeach?>
            </section>
            </form>
    </main>
    <?php
    include_once './views/includes/footer.php';
    ?>
</body>
</html>