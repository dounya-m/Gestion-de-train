<?php

class BilletController{

    public function insertBillet(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom'=> $_POST['nom'],
                'prenom'=> $_POST['prenom'],
                'tele'=> $_POST['tele'],
                'email'=> $_POST['email']
            );

            $result = Billet::insert($data);
            if($result === 'ok'){
                header('location: ./check');
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