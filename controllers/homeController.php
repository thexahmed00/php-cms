<?php

 class HomeController extends Controller{

    public function defaultAction(){
    
       $var['header']="Hello World!";
       $var['content']="This is the content of the home page";
      $template=new Template();
      $template->render('static',$var);
    }
}

?>