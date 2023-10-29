<?php 

class Template{
    private $layout;
    public function __construct($layout){
        $this->layout=$layout;
    }
    public function render($template,$variables){
        extract($variables);
        include VIEW.'layout/'.$this->layout.'.html';
       
    }
   
}