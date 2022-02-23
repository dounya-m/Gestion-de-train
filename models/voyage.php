<?php



class Voyage{

    static public function getAll(){

        // $stmt = Db::connect()->prepare('SELECT * FROM voyage');
        $stmt = Db::connect()->prepare('SELECT * FROM voyage INNER JOIN train ON voyage.train = train.id');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }




    static public function add($data){

        $stmt = Db::connect()->prepare('INSERT INTO voyage
    (heur_depart ,heur_arriver ,date ,train ,gare_dep ,gare_arr)

    VALUES (?,?,?,?,?,?)');
    $stmt->bindParam(1, $data['heur_depart']);
    $stmt->bindParam(2, $data['heur_arriver']);
    $stmt->bindParam(3, $data['date']);
    $stmt->bindParam(4, $data['train']);
    $stmt->bindParam(5, $data['gare-dep']);
    $stmt->bindParam(6, $data['gare-arr']);


        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
            $stmt->close();
            $stmt = null;
    }

}

?>
