<?php
require_once './Database/db.php';

class Billet{

static public function insert($data){

    
    $stmt = Db::connect()->prepare('INSERT INTO `billet`
    (`id`, `nom`, `prenom`, `tele`, `email`) 
    VALUES (?,?,?,?,?)');
    $stmt->bindParam(1, $data['id']);
    $stmt->bindParam(2, $data['nom']);
    $stmt->bindParam(3, $data['prenom']);
    $stmt->bindParam(4, $data['tele']);
    $stmt->bindParam(5, $data['email']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'errore';
        }
        $stmt->close();
        $stmt = null;

}

static public function getBillet($id){ 

    try{
        $query ='SELECT * FROM billet WHERE id=:id ';
        $stmt = Db::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $billet = $stmt->fetch(PDO::FETCH_OBJ);
        return $billet;

    }catch(PDOException $ex){

        echo 'erreur' . $ex->$getMessage;
    }



}
}











?>