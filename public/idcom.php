<?php
$servername = "localhost";
$username = "";
$password = "";

try{
$idcom = new PDO("mysqli:host=$servername;dbname=portfolio", $username, $password);
$idcom ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connexion reuissie avec succés";

}

catch(PDOException $e){
    echo "Error de connexion:" . $e->getMessage();
}

$idcom = null;
?>