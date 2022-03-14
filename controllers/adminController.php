<?php

class adminController {

    public function adminLogin(){

        if(isset($_POST['submit'])){

            $data['email'] = $_POST['usermail'];
            $result = Admin::gettAll($data);
            if(($result->email === $_POST['usermail'] && password_verify($_POST['password'],$result->password)));{

                $_SESSION['login'] = true; 
                $_SESSION['usermail']=$result->email;
                header('location: ./dashboard');
                }
                }else{
                header('location: ./login');
                    
                }
    // else{
    //     Redirect::to('login');
    // }





    
}


}



?>