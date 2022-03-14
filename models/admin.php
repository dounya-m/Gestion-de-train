<?php

class Admin{

    static public function gettAll($data){

        $usermail = $data ['email'];
        try{
            $query ='SELECT * FROM `admin` WHERE email = :usermail ';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(["usermail" => $usermail]);
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;

        }catch(PDOException $ex){

            echo 'erreur' . $ex->$getMessage;
        }

    }


}

















?>