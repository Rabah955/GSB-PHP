<?php

/**
 * Gestion de l'accueil des comptables.
 *
 * PHP Version 7
 *
 * @category  PPE
 * @author    KOUAHO Francis & BRECHIARE Vincent & BENMOUSSA Salim
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
if ($estConnecte) {
    include 'views/accueilComptable.php';
} else {
    include 'views/connexion.php';
}
