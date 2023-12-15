<?php 
require_once "Controller/LivresController.php";
$livreController = new LivresController;
if(empty($_GET['page'])){

require_once "Views/acceuil.view.php";
}else{
switch($_GET['page']){
    case "acceuil" : require_once "Views/acceuil.vieuw.php";
    break;
    case "livres" : $livreController->afficherLivre();
    break;
}

}