<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/js/bootstrap.js">
    <link rel="stylesheet" href="./public/js/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="./public/js/popper.min.js">
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body>
<div class="all d-flex align-items-center mb-3">
    <section class="left w-50 p-5">
        <div class="flou d-flex flex-column mt-5 ">
        <img class="w-25 " src="./public/images/LOGO.svg" alt="logo">
        <p class="w-50 text-center">Le Lorem Ipsum est simplement du faux texte 
            employé dans la composition et la mise en 
            page avant impression. Le Lorem Ipsum est 
            le faux texte standard de l'imprimerie depuis 
            les années 1500, quand un imprimeur anonyme 
            assembla ensemble des morceaux de texte pour 
            réaliser un livre spécimen de polices de texte.</p>
            </div>
    </section>
    <section class="right d-flex flex-column">
        <div class="right-title">
        <img class="w-25" src="./public/images/LOGO_blue.svg" alt="logo">
        <div class="title">
        <h1>Login to your account</h1>
        <h3>See the lastest offers or create one</h3>
        </div>
        </div>
        
        <form action="" method="post"> 
                <div class="cases d-flex flex-column ">
                <div class="d-flex flex-column">
                <label for="name">User Name</label>
                <input class="mail" type="text" id="mail" name="username" require placeholder="admin..">
                </div>
                <div class="d-flex flex-column">
                <label for="passwword">Password</label>
                <input class="mail" type="password" id="password" name="password" require placeholder="*****************">
                <a href="#">Forgot your password?</a>
                </div>
                <div class="flex">
                    <input class="btn btn-primary" class="submit" type="submit" name="sub" value="Sign in" >
                    <input class="btn btn-outline-primary" class="submit" type="submit" name="sub" value="Sign up" >
                </div>
        </form>
    </section>
    </div>
</body>
</html>