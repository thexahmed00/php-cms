<?php

class LoginController extends Controller{


    function runBeforeAction(){

        if($_SESSION['is_submitted'] ?? 0 ==1){
            $var['header']="";
            $var['content']="You are already logged in";
           $template=new Template();
           $template->render('static',$var);
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
        $var['header']="Welcome";
       $var['content']=$_POST['email'];
      $template=new Template();
      $template->render('static',$var);

    }

}

?>