<?php



class Voyage{

    static public function getAll(){

        // $stmt = Db::connect()->prepare('SELECT * FROM voyage');
        $stmt = Db::connect()->prepare('SELECT voyage.*, train.id as train_id, train.nom, train.first_class, train.N FROM voyage INNER JOIN train ON voyage.train = train.id WHERE voyage.status = 0');

        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getArchive(){

        $stmt = Db::connect()->prepare('SELECT voyage.*, train.id as train_id, train.nom, train.first_class, train.N FROM voyage INNER JOIN train ON voyage.train = train.id WHERE voyage.status = 1');

        $stmt->execute();
        return $stmt->fetchAll();
    }


    static public function add($data){

            
    $stmt = Db::connect()->prepare('INSERT INTO voyage
    (heur_depart ,heur_arriver ,date ,train ,gare_dep ,gare_arr,prix)

    VALUES (?,?,?,?,?,?,?)');
    
    $stmt->bindParam(1, $data['heur_depart']);
    $stmt->bindParam(2, $data['heur_arriver']);
    $stmt->bindParam(3, $data['date']);
    $stmt->bindParam(4, $data['train']);
    $stmt->bindParam(5, $data['gare-dep']);
    $stmt->bindParam(6, $data['gare-arr']);
    $stmt->bindParam(7, $data['prix']);


        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }

    static public function getVoyage($id){ 

        try{
            $query ='SELECT * FROM voyage WHERE id=:id ';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $voyage = $stmt->fetch(PDO::FETCH_OBJ);
            return $voyage;

        }catch(PDOException $ex){

            echo 'erreur';
            // . $ex->$getMessage
        }
    }


    static public function delete($data){
        $id = $data ['id'];

        try{
            
            $query = 'DELETE FROM voyage WHERE id=:id';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));

                if($stmt->execute()){
                    return 'ok';

                } 
                }catch(PDOException $ex){

                    echo 'erreur' . $ex->getMessage();

        }
    }
    static public function atodelet(){
        try{
            $query = 'DELETE  FROM voyage WHERE date < NOW()';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(array());
                if($stmt->execute()){
                    return 'ok';

                } 
                }catch(PDOException $ex){

                    echo 'erreur' . $ex->getMessage();
    }

    }

    //creat a static function for updaiting status of voyage
    static public function updateState($status){

        $stmt = Db::connect()->prepare('UPDATE voyage SET status = :status WHERE id = :id');

        $stmt->bindParam(':id', $status['id']);
        $stmt->bindParam(':status', $status['status']);


        if($stmt->execute()){
            echo 'okih';
        }else{
            echo 'error';
        };

    }


    static public function update($data){
        $id = $data['id'];
        $stmt = Db::connect()->prepare('UPDATE voyage SET heur_depart=:heur_depart, heur_arriver=:heur_arriver, train=:train, 
                                        date=:date, gare_dep=:gare_dep, gare_arr=:gare_arr, prix=:prix WHERE id=:id ');

            $stmt->bindParam(':id', $data['id']);
            $stmt->bindParam(':heur_depart', $data['heur_depart']);
            $stmt->bindParam(':heur_arriver', $data['heur_arriver']);
            $stmt->bindParam(':date', $data['date']);
            $stmt->bindParam(':train', $data['train']);
            $stmt->bindParam(':gare_dep', $data['gare-dep']);
            $stmt->bindParam(':gare_arr', $data['gare-arr']);
            $stmt->bindParam(':prix', $data['prix']);
    
    
    
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
                // $stmt->close();
                // $stmt = null;
        }

        static public function recherche($data){

            try{

                $query='SELECT v.*,t.first_class as places FROM voyage v,train t WHERE t.id=v.train and date LIKE ? AND gare_dep LIKE ? AND gare_arr LIKE ? And v.status = 0 and 
                ((select count(*) from billet b where b.id_voyage=v.id)=0 OR ((select count(*) from billet b where b.id_voyage=v.id)) <t.first_class) ';
                $stmt = Db::connect()->prepare($query);
                $stmt->execute(array("%".$data['date']."%", "%".$data['gare_dep']."%", "%".$data['gare_arr']."%"  ));

                    return $voyage = $stmt->fetchAll();

                    }catch(PDOException $ex){
    
                        echo 'erreur';
            }

        }
        static public function resrrver($id){
            $stmt = Db::connect()->prepare ('SELECT FROM voyage., train.id as train.first_class');
            
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }

        }

        
    }


?>
