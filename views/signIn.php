<?php

    if(isset($_POST['submit'])){
        $loginAdmin = new clientController;
        $loginAdmin->clientSignIn();
    }

?>


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
    
    <div class="form_button d-flex mb-5" id="btn">
    <button type="submit" class="btn btn-primary" id="shadow">M'identifie</button>
    <a href="http://localhost/gestionTrain/signUp"><button type="submit" class="btn btn-outline-primary">Crée compte</button></a>
    </div>
    <div class="separation d-flex">

<form method="post" class="sign_in_form d-flex flex-column mt-5" id="signIn">

<div class="form-group mt-5">
        <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group ">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-2">Je m'identifie</button>    
    <!-- <button type="submit" name="submit" class="btn btn-secondary mt-2">Continue en tant qu'envité</button> -->
    </form>    

    </div>
</div>

</section>

<footer class="mt-5">
        <?php
            include_once './views/includes/footer.php';        
        ?>
    </footer>
    </main>
</body>
</html>