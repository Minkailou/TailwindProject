<?php
  $serveur = " winbodt963.mysql.db";
  $username = " winbodt963";
  $password = " Helominka2021N";

  


  try {
  
       $idcom = new PDO("mysql:host=$serveur;dbname=winbodt963", $username, $password); // winbodt963 dbname du serveur ovh
       $idcom -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //    echo "Connexion reussie avec succes";

      }

   catch(PDOException $e){
       echo "Error de connexion". $e->getMessage();
   }   
?>