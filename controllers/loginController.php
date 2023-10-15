<?php

class LoginController{

    function defaultAction(){
        include "views/login.html";
    }

    public function showIndexAction(){
        include "views/login.html";
    }

    public function submitAction(){
        $user=$_POST['email'];
        include "views/thank.html";
    }

    public function runAction($actionName){
        $actionName .= 'Action';
        if(method_exists($this, $actionName)){
            $this->$actionName();
        }else {
            include "views/404.html";
        }
    }
}

?>