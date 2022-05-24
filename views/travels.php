<?php 
    include_once './views/includes/navBare.php';
?>

<?php

        $loginAdmin = new clientController;
        $res = $loginAdmin->getTravles();
        arsort($res);
?>



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
<?php foreach($res as $res):?>
<form action="deletBillet" method="post" >

<section class="voyageurInfo mx-auto col-10 col-lg-6 col-md-9 mt-5">
    <div>
        <h1>Votre Ticket</h1>
        <h4>on vous souhaite un bon voyage</h4>
</div>
        <div class="travels_items">
            <p class="mr-4 d-inline-block">heur_depart:</p>
            <p><?php echo $res->heur_depart; ?></p>
            <p class="mr-4">heur_arriver:</p>
            <p><?php echo $res->heur_arriver; ?></p>
            <p class="mr-4">date:</p>
            <?php echo $res->date; ?>
            <p class="mr-4">action:</p>
        </div>
            <div>
                        <input type="hidden" name="id" 
                        value="<?php echo $res->id_billet; ?>">
                        <button class="btn btn-sm btn-primary">delete</button>
            </div>    
</section>
    </form>
    <?php endforeach?>




<!-- </form> -->
</body>
</html>