<?php



class Voyage{

    static public function getAll(){

        // $stmt = Db::connect()->prepare('SELECT * FROM voyage');
        $stmt = Db::connect()->prepare('SELECT voyage.*, train.id as train_id, train.nom, train.first_class, 
        train.second_class, train.N FROM voyage INNER JOIN train ON voyage.train = train.id');

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

    static public function getVoyage($id){ 

        try{
            $query ='SELECT * FROM voyage WHERE id=:id ';
            $stmt = Db::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $voyage = $stmt->fetch(PDO::FETCH_OBJ);
            return $voyage;

        }catch(PDOException $ex){

            echo 'erreur' . $ex->$getMessage;
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


    static public function update($data){
        $id = $data['id'];
        $stmt = Db::connect()->prepare('UPDATE voyage SET heur_depart=:heur_depart, heur_arriver=:heur_arriver, train=:train, 
                                        date=:date, gare_dep=:gare_dep, gare_arr=:gare_arr WHERE id=:id ');

            $stmt->bindParam(':id', $data['id']);
            $stmt->bindParam(':heur_depart', $data['heur_depart']);
            $stmt->bindParam(':heur_arriver', $data['heur_arriver']);
            $stmt->bindParam(':date', $data['date']);
            $stmt->bindParam(':train', $data['train']);
            $stmt->bindParam(':gare_dep', $data['gare-dep']);
            $stmt->bindParam(':gare_arr', $data['gare-arr']);
    
    
    
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
            
                $query = 'SELECT * FROM voyage WHERE date LIKE ? AND gare_dep LIKE ? AND gare_arr LIKE ?';
                $stmt = Db::connect()->prepare($query);
                $stmt->execute(array("%".$data['date']."%", "%".$data['gare_dep']."%", "%".$data['gare_arr']."%"  ));

                    return $voyage = $stmt->fetchAll();

                    }catch(PDOException $ex){
    
                        echo 'erreur' . $ex->getMessage();
    
            }

        }

        
    }


?>
