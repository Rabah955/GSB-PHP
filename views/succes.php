<?php
/**
 * Vue Erreurs
 *
 * PHP Version 7
 * @category  PPE
 * @author    KOUAHO Francis & BRECHIARE Vincent & BENMOUSSA Salim
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
?>
<div class="alert alert-success" role="alert">
    <?php
    foreach ($_REQUEST['succes'] as $succes) {
        echo '<p>' . htmlspecialchars($succes) . '</p>';
    }
    ?>
</div>