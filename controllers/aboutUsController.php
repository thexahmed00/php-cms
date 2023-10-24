<?php
class AboutUsController extends Controller{
    function defaultAction(){
        $var['header']="About us";
       $var['content']="This is the content of the AboutUS page";
      $template=new Template();
      $template->render('static',$var);
    }
}