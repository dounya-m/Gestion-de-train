<?php


    class VoyageController{

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
                    '1classe' => $_POST['1C'],
                    '2classe' => $_POST['2C']
                );

                $result = Voyage::add($data);
                if($result === 'ok'){
                    header('location'.BASE_URL);
                }else{
                    echo $result;
                }
            }
        }

    }


?>