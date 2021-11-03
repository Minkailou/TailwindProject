<?php
    include("idcom.php");


    // On récupére les infos de la table
    $requete = $idcom->prepare ('SELECT nom, mail, phone, msg FROM portable');
    $requete->execute();

    // On affiche les infos de l atable

    $resultat = $requete->fetchAll (PDO::FETCH_ASSOC);
    $keys = array_keys($resultat);
    for($i = 0; $i < count($resultat); $i++){
        $n = $i + 1;
        echo 'Utilisateur n°' .$n. ':<br>';
    foreach ($resultat[$keys[$i]] as $key => $value){
        echo $key. ' : ' .$value. '<br>';
    } 
       echo '<br>';   
    }
?>