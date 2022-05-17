<?php

class clientController{

    public function addClients(){

        if(isset($_POST['submit'])){
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'birthday' => $_POST['date'],
                'password' => $_POST['password'],
            );

            $result = Client::add($data);
            if($result === 'ok'){
                header('location: ./signIn');
            }else{
                echo $result;
            }
        }
    }

    public function clientSignIn(){

        if($_SERVER['REQUEST_METHOD']==='POST'){

            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $result = Client::signIn($data);
            if($result){
                $_SESSION['signIn'] = true; 
                $_SESSION['email']=$result->email;
                $_SESSION['client_id']=$result->id;
                header('location: ./landing');
            }else{
                header('location: ./signIn');
            }
        }

}
    public function clientSignOut(){

    if(isset($_POST['signOut'])){

        session_destroy();

            header('location: ./landing');
    }


    }

    public function getTravles(){
        return $travels = Client::getTravls();
    }

}

?>