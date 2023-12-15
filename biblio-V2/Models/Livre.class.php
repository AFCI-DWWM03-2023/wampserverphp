<?php

class Livre{
private $idLivres;
private $titre;
private $nbPages;
private $image;

// public static $livres;

public function __construct($idLivres,$titre,$nbPages,$image){
$this->idLivres = $idLivres;
$this->titre = $titre;
$this->nbPages = $nbPages;
$this->image = $image;
// self::$livres[] = $this;
}
public function getIdLivre(){return $this->idLivres;}
public function getTitre(){return $this->titre;}
public function getNbPages(){return $this->nbPages;}
public function getImage(){return $this->image;}

public function setIdLivre($idLivre){$this->idLivres = $idLivre;}
public function setTitre($titre){$this->titre = $titre;}
public function setNbPages($nbPages){$this->nbPages = $nbPages;}
public function setimage($image){$this->image = $image;}
}