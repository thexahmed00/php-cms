<?php

define('ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('VIEW', ROOT.DIRECTORY_SEPARATOR. 'views'.DIRECTORY_SEPARATOR);

session_start();
require_once ROOT. "src/Controller.php";
require_once ROOT. "src/Template.php";

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';


 if($section == 'login'){
   
    include ROOT. "controllers/loginController.php";
    $loginController = new LoginController();
    $loginController->runAction($action);

}elseif($section == 'aboutus'){
    include ROOT. "controllers/aboutusController.php";
    $aboutusController = new AboutUsController();
    $aboutusController->runAction($action);
}
else{
    include  ROOT. "controllers/homeController.php";
    $homeController = new HomeController();
    $homeController->runAction($action);
}   
?>