<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once "Controller/LivresController.php";
$livreController = new LivresController;
try {
    if (empty($_GET['page'])) {
        require_once "Views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($_GET['page']) {
            case "acceuil":
                require_once "Views/accueil.view.php";
                break;
            case "livres":
                if (empty($url[1])) {
                    $livreController->afficherLivres();
                } else if ($url[1] === "l") {
                    $livreController->afficherLivre(intval($url[2]));
                } else if ($url[1] === "a") {
                    $livreController->ajoutLivre();
                } else if ($url[1] === "m") {
                    $livreController->modificationLivre($url[2]);
                } else if ($url[1] === "s") {
                    $livreController->suppressionLivre($url[2]);
                } else if ($url[1] === "av") {
                   $livreController->ajoutLivreValidation();
                } else if ($url[1] === "mv") {
                    $livreController->modifLivreValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("La page n'existe pas ");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
