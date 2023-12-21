<?php ob_start() ?>
<form method="POST" action="<?= URL ?>livres/mv" enctype="multipart/form-data">
<label for="titre">Titre:</label><br>
<input type="text" id="titre" name="titre" value="<?=$livres->getTitre();?>"><br>
<label for="nbPages">Nombre de pages:</label><br>
<input type="number" id="nbPages" name="nbPages" value="<?=$livre->getnbPages();?>"><br> <br>
<h3>Image:</h3>
<img src="<?= URL ?>public/images/<?= $livre->getImage();?>">
<label for="image">Changer l'image:</label><br>
<input type="file" id=image>
<?php
$titre = "Modification du livre :" . $livre->getTitre();
$content = ob_get_clean();
require "template.php";
require_once "Models/Livre.class.php";
?>