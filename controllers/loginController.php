<?php

class LoginController extends Controller{


    function runBeforeAction(){

        if($_SESSION['is_submitted'] ?? 0 ==1){
            include 'views/userexist.html';
            return false;
            
        }
        return true;
    }

    function defaultAction(){
       
        include "views/login.html";
    }

    public function submitAction(){
      
        $user=$_POST['email'];
        $_SESSION['is_submitted']=1;
        include "views/thank.html";

    }

}

?>