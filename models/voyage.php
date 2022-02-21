<?php



class Voyage{

    static public function getAll(){

        $stmt = Db::connect()->prepare('SELECT * FROM voyage');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

}

?>