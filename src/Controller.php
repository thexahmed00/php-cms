<?php
class Controller{
    public function runAction($actionName){

        if(method_exists($this, 'runBeforeAction')){
           $result= $this->runBeforeAction();
           if($result == false){
               return;
           }
        }

        $actionName .= 'Action';
        if(method_exists($this, $actionName)){
            $this->$actionName();
        }else {
            include VIEW."404.html";
        }
    }
}

?>