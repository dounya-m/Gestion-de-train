<?php

require_once './autoload.php';
require_once './controllers/homeController.php';


    $home = new homeController();


    // $pages = ['dashboard','add','update','delet'];
    // $identify = ['login','landing', 'rechercheResultat', 'signUp', 'signIn'];


    $requireAuthPages = ['dashboard','add','update','delet'];
    $normalPages = ['login','landing', 'rechercheResultat', 'signUp', 'signIn', 'reservation','afficheReservation','check'];

    $_GET["page"] ??= "landing"; // if page doesnt exists in $_GET create it and assign 'landing' as its value

    if(isset($_GET["page"])){
        $page = $_GET["page"];
        
        if(in_array( $page, $requireAuthPages)){
            if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
                $home->index($page);
                return;
            }else{
                $home->index("login");
                return;
            }
        }
        if(!in_array( $page,$normalPages)){
            include('views/includes/404.php');
            return;
        }

        $home->index($page);



    }
    
    // if(isset($_SESSION['login']) === true){
    //     if(isset($_GET['page'])){
    //             if(in_array($_GET['page'],$pages)){
    //             $page = $_GET['page'];
    //             $home->index($page);

    //         }else{
    //             include('views/includes/404.php');
    //         }
    //     }
    // }
    //     elseif(!isset($_SESSION['login']) === true){
    //     if(isset($_GET['page'])){

    //         if(in_array($_GET['page'],$identify)){

    //             $page = $_GET['page'];
    //             $home->index($page);

    //         }
    //         }else{
    //             $home->index('login');
    //         }
    //         }else{
    //                         $home->index('landing');
    //                     }


