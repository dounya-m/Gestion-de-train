<?php

class reservation{

static public function insert(){

    $stmt = Db::connect()->prepare('INSERT voyage.*, voyage.id as train_id, train.nom, train.first_class, 
    train.second_class, train.N FROM voyage INNER JOIN train ON voyage.train = train.id');

    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;

}



}











?>