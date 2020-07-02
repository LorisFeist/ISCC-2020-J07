<?php

//tableau//

$historique_commandes = array(5.49, 9.99, 5.49, 15.99, 25);

//listes reçues//

function afficher_commandes($historique_commandes)
{
    foreach($historique_commandes as $element)
    echo 'Une commande de '.$element.' euros a été reçus.<br>';

// calcul //
    array_sum($historique_commandes);    
    echo "Le total de commande est " .array_sum($historique_commandes). ' euros';
}

afficher_commandes($historique_commandes)

?>