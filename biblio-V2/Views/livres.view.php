<?php 
require_once "Models/Model.class.php";
require_once "Livre.class.php";
require_once "Models/LivreManager.class.php";

$livreManager = new LivreManager;
$livreManager->chargementLivres();


ob_start() ?>
    <table>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th>Actions</th>
        </tr>
        <?php for($i=0;$i<count($livres->getLivres());$i++) :?>

        <tr>
            <td><img src="public/images/<?= $livres[$i]->getLivres()->getImage();?>" alt=""></td>
            <td><?= $livres[$i]->getLivres()->getTitre();?></td>
            <td><?= $livres[$i]->getLivres()->getNbPages();?></td>
            <td>
                <!-- Divisez la colonne "Actions" en deux sous-colonnes -->
                <button>Modifier</button>
                <button>Supprimer</button>
            </td>
        </tr>
        <?php endfor; ?>

    </table>
    <button>Ajouter</button>
<?php 
$titre = "Les livres de la bibliothÃ¨que";
$content = ob_get_clean();
require "template.php"; 
?>
