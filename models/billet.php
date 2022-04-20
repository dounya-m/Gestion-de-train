<?php
require_once './Database/db.php';

class Billet{

static public function insert($data){

    
    $stmt = Db::connect()->prepare('INSERT INTO `billet`
    (`nom`, `prenom`, `tele`, `email` , `id_voyage`) 
    VALUES (?,?,?,?,?)');
    $stmt->bindParam(1, $data['nom']);
    $stmt->bindParam(2, $data['prenom']);
    $stmt->bindParam(3, $data['tele']);
    $stmt->bindParam(4, $data['email']);
    $stmt->bindParam(5, $data['id_voyage']);


        if($stmt->execute()){
            return 'ok';
        }else{
            return 'errore';
        }
        // $stmt->close();
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

static public function getLast(){
    try{
        $query ='SELECT * FROM billet ORDER BY id DESC LIMIT 0,1';
        $stmt = Db::connect()->prepare($query);
        $stmt->execute();
        $billet = $stmt->fetch(PDO::FETCH_OBJ);
        return $billet;

    }catch(PDOException $ex){

        echo 'erreur';
        // . $ex->$getMessage
    }
}


static public function getNumberVoyage($id){
    try{
        $query ="SELECT COUNT(*) as nomber FROM billet WHERE id_voyage like $id ";
        $stmt = Db::connect()->prepare($query);
        $stmt->execute();
        $billet = $stmt->fetch(PDO::FETCH_OBJ);
        return $billet;

    }catch(PDOException $ex){

        echo 'erreur';
        // . $ex->$getMessage
    }
}


}











?>