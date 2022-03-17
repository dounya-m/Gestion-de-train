<?php

    if(isset($_POST['signOut'])){
        $logOutAdmin = new clientController;
        $logOutAdmin->clientSignOut();
    }
?>
<?php

if(isset($_POST['signIn'])){
    header('location: ./signIn');
}elseif(isset($_POST['signUp'])){
    header('location: ./signUp');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/js/bootstrap.js">
    <link rel="stylesheet" href="./public/js/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="./public/js/popper.min.js">
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <nav class="d-flex align-items-center justify-content-around mt-3">
        <div class="nav-image p-2">
            <img class="w-50" src="./public/images/LOGO_blue.svg" alt="logo">
        </div>
        <div class="nav-itemes p-2">
            <div class="nav-itemes-gap d-flex align-items-center ">
            <a href="">Home</a>
            <a href="">text</a>
            <a href="">text</a>
            <a href="">text</a>
            <form action="" method="post">
            <?php if(!isset($_SESSION['signIn'])) { ?>
            <div class="nav-button">
            <button class="btn btn-primary btn-outline-light " type="submit"  name="signUp">Sign UP</button>
            <button class="btn btn-outline-primary" type="submit" name="signIn"> Sign In</button>
            </div>
            <?php } ?>
            </form>
            <form action="" method="post">
            <?php if(isset($_SESSION['signIn'])) { ?>
            <div class="nav-button">
            <input class="btn btn-primary btn-outline-light " type="submit"  name="signOut" value="Sign Out">
            <!-- <input class="btn btn-outline-primary" type="submit" name="signIn" value="Sign In"> -->
            </div>
            <?php } ?>
            </div>
        </form>
        </div>
    </nav>


</body>
</html>