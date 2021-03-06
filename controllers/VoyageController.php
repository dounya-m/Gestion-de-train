<?php


    class VoyageController {

        public function getAllVoyage(){
            $voyages = Voyage::getAll();
            return $voyages;
        }

        public function getAllVoyageArchive(){
            $voyages = Voyage::getArchive();
            return $voyages;
        }
        
        public function addVoyages(){
            if(isset($_POST['submit'])){
                $data = array(
                    'heur_depart' => $_POST['timeDep'],
                    'heur_arriver' => $_POST['timeArr'],
                    'date' => $_POST['date'],
                    'train' => $_POST['Ntrain'],
                    'gare-dep' => $_POST['garDep'],
                    'gare-arr' => $_POST['garArr'],
                    'prix' => $_POST['prix'],
                );

                $result = Voyage::add($data);
                if($result === 'ok'){
                    header('location: ./dashboard');
                }else{
                    echo $result;
                }
            }
        }



        public function getOneVoyage(){

            if(isset($_POST['id'])){

                $data = array(
                    'id' => $_POST['id'],
                );
                $voyages = Voyage::getVoyage($_POST["id"]);
                return $voyages;
            }

        }
        //creat function for updaiting status of voyage from 0 to 1
        public function updateStateVoyage(){
            if(isset($_POST['id'])){
                //voyage statu =0
                $newVal=1;
                $status= array(
                    'id'=>$_POST['id'],
                    'status' => $newVal,
                );
                $voyage = Voyage::updateState($status);
                echo 'oktoto';
                return $voyage;
            }else{
                echo 'error';
            }
        }
        public function updateOneVoyage(){
            // call Voyage model update function 
            if(isset($_POST['submit'])){

                $data = array(
                    'id' => $_POST['id'],
                    'heur_depart' => $_POST['timeDep'],
                    'heur_arriver' => $_POST['timeArr'],
                    'date' => $_POST['date'],
                    'train' => $_POST['Ntrain'],
                    'gare-dep' => $_POST['garDep'],
                    'gare-arr' => $_POST['garArr'],
                    'prix' => $_POST['prix'],
                );
                    $result = Voyage::update($data);
                    if($result==='ok'){
                        header('location: ./dashboard');
                    }else{
                        echo $result;
                    }
        }
    }

        public function deleteVoyage(){

            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = voyage::delete($data);

                if($result === 'ok'){
                    header('location: ./dashboard');
                }else{
                    echo "$result";
                }
            }

        }

        public function deleteVoyageOld(){

            if(isset($_POST['submit'])){

                // $data['id'] = $_POST['id'];
                $result = voyage::atodelet( );
                if($result === 'ok'){
                    header('location: ./dashboard');
            }
        }

        }

        public function findVoyage(){
            if(isset($_POST['submit'])){
            $data = array(
                'date' => $_POST['date'],
                'gare_dep' => $_POST['gare_dep'],
                'gare_arr' => $_POST['gare_arr']
            );
            if($voyages = voyage::recherche($data))
            return $voyages;
            else 
            header('location:http://localhost/gestionTrain/');
        }
    }

        public function reserverDirection(){
            if(isset($_SESSION['signIn'])) {
                if(isset($_POST['reserver'])){
                    header('location: ./reservation');
                }
            }else{
                header('location: ./signIn');
            }
        }

    }


?>