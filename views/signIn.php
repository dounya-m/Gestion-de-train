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

    <div class="identifier ">
    
    <div class="form_button d-flex" id="btn">
    <button type="submit" class="btn btn-primary" id="shadow">M'identifie</button>
    <a href="http://localhost/gestionTrain/signUp"><button type="submit" class="btn btn-outline-primary">Crée compte</button></a>
    </div>
    <div class="separation d-flex">

<form class="sign_in_form d-flex flex-column mt-5" id="signIn">

<div class="form-group mt-5">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group ">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Je m'identifie</button>
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