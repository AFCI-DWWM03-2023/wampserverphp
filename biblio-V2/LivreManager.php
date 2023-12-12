<?php

class LivreManager{
private $livres;

public function ajoutLivre($livre){
$this->livres[] = $livre;

}
public function getLivre(){
return $this->livres;

}

}