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
    <form class="identifier d-flex flex-column" style="width: 35rem;">
    <h1>Je Souhaite</h1>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Je m'identifie</button>
</form>
    </main>

    <footer>
        <?php
            include_once './views/includes/footer.php';        
        ?>
    </footer>
</body>
</html>