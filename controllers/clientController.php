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

        if(isset($_POST['submit'])){

            $data['email'] = $_POST['usermail'];
            $result = Client::signIn($data);
            if(($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)));{

                $_SESSION['signIn'] = true; 
                $_SESSION['email']=$result->email;
                header('location: ./landing');
                }
    // else{
    //     Redirect::to('login');
    // }
    
    }else{
    header('location: ./signIn');
        
    }

}
    public function clientSignOut(){

    if(isset($_POST['signOut'])){

        session_destroy();

            header('location: ./landing');
    }


    }

}

?>