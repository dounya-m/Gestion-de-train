<?php
if(isset($_POST['id'])){
    $del = new BilletController;
    $delet = $del->deleteBillet($_POST['id']);
header('location: ./travels');
}



?>