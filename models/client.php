<?php

class Client{


    static public function add($data){

        $stmt = Db::connect()->prepare('INSERT INTO `client`
        (`id`, `nom`,`prenom`, `email`, `password`, `birthday`) 
        VALUES 
        (?,?,?,?,?,?)');

        $stmt->bindParam(1, $data['id']);
        $stmt->bindParam(2, $data['nom']);
        $stmt->bindParam(3, $data['prenom']);
        $stmt->bindParam(4, $data['email']);
        $stmt->bindParam(5, $data['password']);
        $stmt->bindParam(6, $data['birthday']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
            $stmt->close();
            $stmt = null;

    }

    static public function signIn($data){

        $usermail = $data ['email'];
        $password = $data ['password'];
        try{
            $query ='SELECT * FROM `client` WHERE email = :email and password = :password';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(["email" => $usermail , "password" => $password]);
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;

        }catch(PDOException $ex){

            return 0;
            // . $ex->$getMessage;
        }

    }

    static public function getTravls(){
        try{
            $idClient = $_SESSION['client_id'];
            $query ="SELECT * FROM billet as b , voyage as v WHERE b.id_voyage like v.id and b.id_client like $idClient ";
            $stmt = Db::connect()->prepare($query);
            $stmt->execute();
            $allTravels = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $allTravels;

        }catch(PDOException $ex){

            return 0;
            // . $ex->$getMessage;
        }
    }

}

?>