<?php

class BilletController{

    public function insertBillet(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = array(
                'id_voyage'=> $_GET['id'],
                'nom'=> $_POST['nom'],
                'prenom'=> $_POST['prenom'],
                'tele'=> $_POST['tele'],
                'email'=> $_POST['email']
            );

            $result = Billet::insert($data);
            if($result === 'ok'){
                $res = Billet::getLast();
                $data['id'] = $res->id;
                $data['nom'] = $res->nom;
                $data['prenom'] = $res->prenom;

                $resV = Voyage::getVoyage($_GET['id']);
                $data['gare_dep'] = $resV->gare_dep;
                $data['gare_arr'] = $resV->gare_arr;
                $data['prix'] = $resV->prix;

                include('views/check.php');
                // header('location:http://localhost/gestionTrain/reservation');
            }else{
                echo $result;
            }
        }
    }

    public function getOneBillet(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
            );
            
            $billet = Billet::getBillet($_POST["id"]);
                return $billet;
            }
        }




        
    }



?>