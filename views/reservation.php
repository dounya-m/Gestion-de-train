<?php 
    include_once './views/includes/navBare.php';

?>


<body>


<section class="info d-flex justify-content-center mt-5 mx-auto col-6">
    <h3><?=$_GET["depart"]?></h3>
    <h3><?=$_GET["arrive"]?></h3>
    <div class="prix">
        <p class="mt-3"><?=$_GET["prix"]?>Dh</p>
    </div>
</section>

    <section class="voyageurInfo mx-auto col-10 col-lg-6 col-md-9 mt-5">
    <div>
        <h1>Qui voyage ?</h1>
        <h4>J'enregistre les informations voyageurs</h4>
</div>
        <form method="post" class="information_form d-flex flex-column mt-5 align-items-center" id="signUp">

<div class="d-flex justify-content-center mt-5">
<div class="form-group mr-5">
        <label for="inputnom">Mon nom</label>
        <input type="text" class="form-control" id="inputEmail" name="nom" placeholder="nom">
    </div>
    <div class="form-group ml-5">
        <label for="inputprenom">Mon prénom</label>
        <input type="text" class="form-control" id="inputEmail" name="prenom" placeholder="prénom">
    </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
    <div class="form-group mr-5">
        <label for="inputdate">Numéro de Téléphone</label>
        <input type="text" class="form-control" id="inputEmail" name="date" placeholder="Téléphone">
    </div>
    <div class="form-group ml-5">
        <label for="inputdate">Mon email</label>
        <input type="email" class="form-control" id="inputEmail" name="date" placeholder="Téléphone">
    </div>
    </div>
    <!-- <input type="submit" name="submit" class="btn btn-primary mt-2 "></button> -->
    </section>

    <section class="voyageurInfo mx-auto col-10 col-lg-4 col-md-9 mt-5 mb-5">
    <div>
        <h1>Demande de paiement</h1>
</div>

    <div method="post" class="information_form d-flex flex-column mt-5 align-items-center" id="signUp">

<div class="d-flex flex-column justify-content-center mt-2">
<div class="form-group mr-2">
        <label for="inputnom">Nom du porteur de la carte</label>
        <input type="text" class="form-control" id="inputEmail" name="nom" placeholder="écrire...">
    </div>
    <div class="form-group ml-2">
        <label for="inputprenom">Numéro de carte de paiement</label>
        <input type="text" class="form-control" id="inputEmail" name="prenom" placeholder="écrire...">
    </div>
    <div class="form-group ml-2">
        <label for="inputprenom">Date d'expiration</label>
        <input type="date" class="form-control" id="inputEmail" name="prenom" placeholder="prénom">
    </div>
    <div class="form-group ml-2">
        <label for="inputprenom">Code de verification</label>
        <input  type="text" class="form-control" id="inputEmail" name="prenom" placeholder="code..">
    </div>
    </div>

    <input type="submit" name="submit" class="btn btn-primary mt-2 "></button>
</div>

</form>
    </section>
    <?php
    include_once './views/includes/footer.php';
    ?>
</body>