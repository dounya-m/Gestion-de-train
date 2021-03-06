<?php 
    include_once './views/includes/navBare.php';
?>

<?php
    if(isset($_POST['submit'])){
    $rechercheVoyage = new VoyageController();
    $rechercheVoyage->findVoyage();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style/main.css">
    <title>Document</title>
</head>
<body>
<video id="myVideo"  autoplay muted loop>
  <source src="./public/images/dribbble.mp4" type="video/mp4">
</video>
<section class="head d-flex">
<div class="head_description">
    <h1>Wher do you want to go?</h1>
    <?php if(!isset($_SESSION['signIn'])) { ?>
    <div class="head_button">
    <button type="button" class="btn btn-primary btn-lg">SignN Up</button>
    <button type="button" class="btn btn-outline-light btn-lg">Sign In</button>
    </div>
    <?php } ?>
    <?php if(isset($_SESSION['signIn'])) { ?>
    <div class="head_button">
    <button type="button" class="btn btn-primary btn-lg">SignN Out</button>
    </div>
    <?php } ?>
    <div class="head-description d-flex flex-column">
    <div class= "d-flex">
            <h3>120m+</h3>
            <h3>36</h3>
            <h3>80</h3>
            </div>
        <div class= "d-flex">
            <p>Passengers</p>
            <p>Station</p>
            <p>Trains</p>
        </div>
    </table>
    </div>
    </div>
</section>
<section class="form d-flex align-items-center justify-content-center" id="form">
      <form method="post" class="form-inline" action="rechercheResultat"> 

        <div class="form-group">
            <label for="date">Date de voyage</label>
            <input id="current_date" type="date" name="date" class="form-control m-2" placeholder="Date" required="required">
        </div>
        <div class="form-group">
                <label for="gare-dep">Gare de depart</label>
                <input type="text" name="gare_dep" class="form-control m-2" placeholder="Gare de depart" required="required">
        </div>
        <div class="form-group">
                <label for="gare-dep">Gare d'Arriver</label>
                <input type="text" name="gare_arr" class="form-control m-2" placeholder="Gare de depart" required="required">
        </div>
        <!-- <div class="select_form d-flex">
        <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label mr-3" for="exampleRadios1">1??re classe</label>
</div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">2??me classe</label>
    </div>
        </div> -->

        <button class="btn btn-primary btn-lg" type="submit"  name="submit">Search</button>
    </form>
</section>
<section class="middle">
<div class="middle_title mt-5">
        <h1>Popular Destination</h1>
</div>


<div class="middle_card d-flex justify-content-center mt-5 ">

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/F.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Casablanca</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">R??serv??e</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/D.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Marrakech</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">R??serv??e</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/E.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Tanger</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">R??serv??e</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/C.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Oujda</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">R??serv??e</a>
  </div>
  </div>

</div>
</section>
    <section class="footer_landing">
    <?php 
    include_once './views/includes/footer.php';
    ?>
    </section>

      <script>
      date = new Date();
      var tdate = date.getDate();
      var tmonth = date.getMonth() +1;
      if(tdate < 10){
        tdate = '0' + tdate;
      }
      if(tmonth < 10){
        tmonth = '0' + tmonth;
      }
      var year = date.getUTCFullYear();
      var maxMont = 0 + +tmonth + +1;
      if(maxMont < 10){
        maxMont = '0' + maxMont;
      }
      var minDate = year + '-' + tmonth + '-' + tdate;
      var maxDate = year + '-' + maxMont + '-' + tdate;
      document.getElementById('current_date').setAttribute('min', minDate);
      document.getElementById('current_date').setAttribute('max', maxDate);
      console.log(maxDate);

      </script>
</body>
</html>