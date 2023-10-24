<?php 

class Template{
    public function render($template,$variables){
        extract($variables);
        include 'views/'.$template. '.html';
       
    }
   
}