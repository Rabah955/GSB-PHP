<?php
/**
 * Vue Déconnexion
 *
 * PHP Version 7
 * @category  PPE
 * @author    KOUAHO Francis & BRECHIARE Vincent & BENMOUSSA Salim
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
deconnecter();
?>
<div class="alert alert-info" role="alert">
    <p>Vous avez bien été déconnecté ! <a href="index.php">Cliquez ici</a>
        pour revenir à la page de connexion.</p>
</div>
<?php
header("Refresh: 3;URL=index.php");
