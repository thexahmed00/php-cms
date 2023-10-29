<?php

class LoginController extends Controller{


    function runBeforeAction(){

        if($_SESSION['is_submitted'] ?? 0 ==1){
            $var['header']="";
            $var['content']="You are already logged in";
           $template=new Template('theme');
           $template->render('static',$var);
            return false;
            
        }
        return true;
    }

    function defaultAction(){
       
        $var['header']="Login";
        $var['content']="Don't have an account? <a href='/register'>Register</a>";
       $template=new Template('theme');
       $template->render('login',$var);
    }

    public function submitAction(){
      
        $user=$_POST['email'];
        $_SESSION['is_submitted']=1;
        $var['header']="Welcome";
       $var['content']=$_POST['email'];
      $template=new Template('theme');
      $template->render('static',$var);

    }

}

?>