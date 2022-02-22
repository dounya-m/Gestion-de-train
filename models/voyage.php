<?php



class Voyage{

    static public function getAll(){

        $stmt = Db::connect()->prepare('SELECT * FROM voyage');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function add($data){
        $stmt = Db::connect()->prepare('INSERT INTO voyage
    (heur_depart ,heur_arriver ,date ,train ,gare-dep ,gare-arr ,1classe ,2classe)

    VALUES(:heur_depart ,:heur_arriver ,:date ,:train ,:gare-dep ,:gare-arr ,:1classe ,:2classe) ');

    $stmt->bindParam(':date', $data['date']);
    $stmt->bindParam(':heur_depart', $data ['timeDep']);
    $stmt->bindParam(':heur_arriver', $data ['timeArr']);
    $stmt->bindParam(':train', $data ['Ntrain']);
    $stmt->bindParam(':gare-dep', $data ['garDep']);
    $stmt->bindParam(':gare-arr', $data ['garArr']);
    $stmt->bindParam(':1classe', $data ['1C']);
    $stmt->bindParam(':2classe', $data ['2C']);

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
