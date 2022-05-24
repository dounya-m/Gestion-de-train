<?php
require_once './models/billet.php';

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

            $num = Billet::getNumberVoyage($_GET['id']);
            
            if($num->nomber < 200){
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
            }else{
                header('location:http://localhost/gestionTrain/');
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

    //     public function statu(){
    //         if(isset($_POST['submit'])){
    //             //change statu from true to false
    //             $data = array(
    //                 'id' => $_POST['id'],
    //                 'state'=>'0',
    //             );
    //             $result = Billet::update($data);
    //             if($result === 'ok'){
    //                 header('location:http://localhost/gestionTrain/travels');
    //         }
    //     }
    // }

        public function deleteBillet($id){

            // if(isset($_POST['id'])){
                // $data['id'] = $id;

                
                $result = Billet::delete($id);
               
                if($result ){
                    header('location: ./travels');
                }else{
                    echo "$result";
                }
            // }
            header('location: ./travels');

}

// public function cancelR()
//             {

//                 $day = strtotime($_POST["heur_depart"]);
//                 $time =  $day - strtotime('now') + 60 * 60;

//                 if($time > 1)
//                 {

//                     $Id_r = $_POST["id"];

//                     $delete = new Billet();
//                     $delete->delete("billet","id",$Id_r);

//                     // $idTrip = $_POST["idTrip"];
//                     // $seats = $delete->Seats($idTrip);
//                     // $seats = $seats['seats'] + 1;


//                 }
//                 else
//                 {
//                     echo "Vous ne pouvez pas annuler votre réservation";
//                 }
//                 header('location:http://localhost/gestionTrain/travels');


//             }

}
?>