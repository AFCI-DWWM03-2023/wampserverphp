<?php ob_start() ?>
<p>Ici le contenu de ma page d'accueil</p>

<?php 
$titre = "La Bibliothèque de l'AFCI";
$content = ob_get_clean();
require "Views/template.php"; 
require_once "Models/Livre.class.php";
?>