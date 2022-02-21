<?php


    class VoyageController{
        public function getAllVoyage(){
            $voyages = Voyage::getAll();
            return $voyages;
        }
    }


?>