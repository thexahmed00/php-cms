<?php


$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';


if($section == 'home'){

    include "controllers/homeController.php";
}
elseif($section == 'login'){
    echo $action;
    include "controllers/loginController.php";
    $loginController = new LoginController();
    $loginController->runAction($action);

}
else{
    include "controllers/homeController.php";
}
?>