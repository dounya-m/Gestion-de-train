<?php 
    include_once './views/includes/navBare.php';
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
    <div class="head_button">
    <button type="button" class="btn btn-primary btn-lg">Sign Up</button>
    <button type="button" class="btn btn-outline-light btn-lg">Sign In</button>
    </div>
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
    <div class="form-group ">
            <label for="date">Date de voyage</label>
            <input type="date" name="date" class="form-control" placeholder="Date">
        </div>
        <div class="form-group">
                <label for="gare-dep">Gare de depart</label>
                <input type="text" name="garDep" class="form-control" placeholder="Gare de depart">
        </div>
        <div class="form-group">
                <label for="gare-dep">Gare d'Arriver</label>
                <input type="text" name="garDep" class="form-control" placeholder="Gare de depart">
        </div>
        <div class="select_form d-flex">
        <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">1ère classe</label>
</div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">2ème classe</label>
    </div>
        </div>
    <form class="form-inline ">
        <button class="btn btn-primary btn-lg" type="submit">Search</button>
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
    <a href="#form" class="btn btn-primary">Réservée</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/D.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Marrakech</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">Réservée</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/E.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Tanger</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">Réservée</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/images/C.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Fès</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#form" class="btn btn-primary">Réservée</a>
  </div>
  </div>

</div>
</section>
    <section class="footer_landing">
    <?php 
    include_once './views/includes/footer.php';
    ?>
    </section>

</body>
</html>