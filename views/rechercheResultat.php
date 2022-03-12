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
                <p>Casablanca</p>
            </div>
            <img src="./public/icones/distanation.svg" alt="trainIcone">
            <div class="distanation_Arr">
                <h3>Ville d'Arrivée</h3>
                <p>Oujada</p>
            </div>
        </section>

        
        <section class="resultats d-flex flex-column align-items-center mt-5">
            <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="./public/images/morning.webp" alt="Card image cap">
        <div class="card-body">
            <div class="time d-flex align-items-center justify-content-center">
            <h5>12:00</h5>
            <p>8h12min</p>
            <h5>20:12</h5>
            </div>
            <hr>
            <div class="classe d-flex justify-content-between">
            <p>First Classe</p>
            <p>220 DH</p>
            </div>
            <a href="#" class="btn btn-primary">Réserver</a>
        </div>
        </div>

        <div class="card mt-5" style="width: 25rem;">
        <img class="card-img-top" src="./public/images/B.webp" alt="Card image cap">
        <div class="card-body">
        <div class="time d-flex align-items-center justify-content-center">
            <h5>20:15</h5>
            <p>10h30min</p>
            <h5>06:45</h5>
            </div>
            <hr>
            <div class="classe d-flex justify-content-between">
            <p>First Classe</p>
            <p>200 DH</p>
            </div>
            <a href="#" class="btn btn-primary">Réserver</a>
        </div>
        </div>
            </section>


    </main>

    <section class="footer">
    <?php
    include_once './views/includes/footer.php';
    ?>
    </section>
</body>
</html>