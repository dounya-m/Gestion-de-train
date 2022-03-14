<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        include_once './views/includes/navBare.php';        
        ?>
    </header>

    <main>

    <h1>Je Souhaite</h1>

    <section class="twoForm ">

    <div class="identifier">
    
    <div class="form_button d-flex" id="btn">
    <button type="submit" class="btn btn-primary" id="shadow">Crée compte </button>
    <a href="http://localhost/gestionTrain/signIn"><button type="submit" class="btn btn-outline-primary">M'identifie</button></a>

    </div>
    <div class="separation d-flex">

    <form class="sign_up_form d-flex flex-column mt-5 " id="signUp">


<div class="flex mt-5">
<div class="form-group">
        <label for="inputnom">Mon nom</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="inputprenom">Mon prénom</label>
        <input type="text" class="form-control" id="inputEmail" placeholder="prénom">
    </div>
    </div>

    <div class="flex">
    <div class="form-group">
        <label for="inputdate">Ma date de naissance</label>
        <input type="date" class="form-control" id="inputEmail" placeholder="Ma date de naissance">
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    </div>
    <div class="flex">
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
        <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Je crée un compte</button>

    </form>

    </div>
</div>

</section>

    </main>

    <footer>
        <?php
            include_once './views/includes/footer.php';        
        ?>
    </footer>
</body>
</html>