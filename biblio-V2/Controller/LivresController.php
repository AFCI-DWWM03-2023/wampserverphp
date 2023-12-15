<?php 
require_once "Models/LivreManager.php";
class LivresController{

    private $livreManager;

    public function __construct(){
        require_once "Models/LivreManager.php";
        $this->livreManager = new LivreManager;
$this->livreManager->chargementLivres();

    }
public function afficherLivre(){

    $livres = $this->livreManager->getLivre();
    require "Views/livres.view.php";



}

}