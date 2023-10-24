<?php
session_start();
require_once "src/Controller.php";
require_once "src/Template.php";

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';


 if($section == 'login'){
   
    include "controllers/loginController.php";
    $loginController = new LoginController();
    $loginController->runAction($action);

}elseif($section == 'aboutus'){
    include "controllers/aboutusController.php";
    $aboutusController = new AboutUsController();
    $aboutusController->runAction($action);
}
else{
    include "controllers/homeController.php";
    $homeController = new HomeController();
    $homeController->runAction($action);
}   
?>