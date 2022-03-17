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
        try{
            $query ='SELECT * FROM `client` WHERE email = :email';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(["email" => $email]);
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $client;

        }catch(PDOException $ex){

            echo 'erreur' . $ex->$getMessage;
        }

    }

}

?>