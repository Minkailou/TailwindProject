<?php
//    include("head.inc.php");
   include("idcom.php");

// La function valid_donnees pour echapper les caractéres dangeureux
   $nom = valid_donnees($_POST['nom']);
   $mail = valid_donnees($_POST['mail']);
   $phone = valid_donnees($_POST['phone']);
   $msg = valid_donnees($_POST['msg']);

   function valid_donnees ($donnees){
       $donnees = trim ($donnees);
       $donnees = stripcslashes($donnees);
       $donnees = htmlspecialchars($donnees);
       return $donnees;
   }

   
   if(isset($_POST['valider'])){
       if(!empty($_POST['nom'])&& strlen($nom) <=20 && preg_match("^[A-Za-z '-]+$^", $nom) 
       && !empty($_POST['mail'])&& filter_var($mail, FILTER_VALIDATE_EMAIL) && !empty($_POST['phone']) && !empty($_POST['msg'])){

       

        $requete = $idcom-> prepare("INSERT INTO portable (nom, mail, phone, msg) VALUES (?, ?, ?, ?)");
        $requete->execute(array($nom, $mail, $phone, $msg));
        
        header('location:remerciement.php');


       }else{
        echo "Veillez remplir tous les champs...";
    }

   }
   


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <form action="#" method="POST" enctype="application/x-www-form-urlencoded" style="margin-top: 100px;">
        <fieldset>
            <legend>Formulaire de contact</legend>
            <table>
            <tr>
                      <td>Prenom : </td>
                      <td><input type="text" name="nom" required pattern="^[A-Za-z '-]+$" maxlength="20"></td>
                  </tr>

                  <tr>
                      <td>Email : </td>
                      <td><input type="email" name="mail" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{}[A-Za-z]{2,}$"></td>
                  </tr>
                  <tr>
                      <td>Telephone : </td>
                      <td><input type="text" name="phone" maxlength="15"></td>
                  </tr>
                  <tr>
                      <td>Message : </td>
                      <td><textarea type="text" name="msg" maxlength="15000"></textarea></td>
                  </tr>

                  <tr>
        
                      <td><input type="reset" value="Effacer"></td>
                      <td><input type="submit" name="valider"></td>
                  </tr>
            </table>
        </fieldset>
    </form>
    
</body>
</html>