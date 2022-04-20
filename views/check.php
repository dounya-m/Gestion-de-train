<?php


// if(isset($_POST["submit"])){

//     $newBillet = new BilletController();
//     $data = $newBillet->getOneBillet();
// } 

?>
<body>
    <section class="header">
        <?php
        include_once './views/includes/navBare.php';
        ?>
    </section>
    <section class="card_tycket w-75 mx-auto" id="tycket"  onload="autoClick();">
        <div class="inner_card d-flex flex-column ">
            <div class="card_header d-flex align-items-center justify-content-center justify-content-between">
                <img class="" src="./public/images/LOGO_blue.svg" alt="">
                <p>N° <?php echo $_GET['id']; ?></p>
            </div>
            <h3 class="text-center">On Vous Souhaite Un Bon Voyage Sur Notre Ligne NSRM</h3>

            <div class="card_corp d-flex justify-content-center justify-content-around ">
                <div class="corp_itemes d-flex ">
                    <p class="font-weight-bold">Nom:</p>
                    <p><?php echo $data['nom']; ?></p>
                </div>
                <div class="corp_itemes d-flex ">
                    <p class="font-weight-bold">Prénom:</p>
                    <p><?php echo $data['prenom']; ?></p>
                </div>
            </div>

            <div class="card_corp d-flex justify-content-center justify-content-around ">
                <div class="corp_itemes d-flex ">
                    <p class="font-weight-bold">De:</p>
                    <p><?php echo $data['gare_dep']; ?></p>
                </div>
                <div class="corp_itemes d-flex ">
                    <p class="font-weight-bold">À:</p>
                    <p><?php echo $data['gare_arr']; ?></p>
                </div>
                <div class="corp_itemes d-flex ">
                    <p class="font-weight-bold">Prix:</p>
                    <p><?php echo $data['prix']; ?>DH</p>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center">
                <h1>Bon Voyage</h1>
                <a href="./landing"> <img src="./public/icones/sign-out.svg" alt="" style="width: 2vw"></a>
            </div>
</body>
<!-- <img src="./public/images/train.gif" alt=""> -->