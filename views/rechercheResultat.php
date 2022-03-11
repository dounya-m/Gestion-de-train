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


    </main>

    <section class="footer">
    <?php
    include_once './views/includes/footer.php';
    ?>
    </section>
</body>
</html>