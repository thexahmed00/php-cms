<?php

 class HomeController extends Controller{

    public function defaultAction(){
    
       $var['header']="Hello World!";
       $var['content']="This is the content of the home page";
      $template=new Template('theme');
      $template->render('static',$var);
    }
}

?>