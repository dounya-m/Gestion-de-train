<?php


    class VoyageController {

        public function getAllVoyage(){
            $voyages = Voyage::getAll();
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
                );

                $result = Voyage::add($data);
                if($result === 'ok'){
                    header('location:'.BASE_URL);
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
                );
                    $result = Voyage::update($data);
                    if($result==='ok'){
                        header('location:'.BASE_URL);
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
                    header('location:'.BASE_URL);
                }else{
                    echo "$result";
                }
            }

        }

    }


?>