<?php
   include_once("head.inc.php");
   include_once("idcom.php");

    if(isset($_POST['valider'])){
    if(!empty($_POST['nom'])&&  !empty($_POST['mail']) 
    && !empty($_POST['phone']) && !empty($_POST['msg'])){


   $id_client="\N";   
   $nom = $idcom->quote($_POST['nom']);
   $mail = $idcom->quote($_POST['mail']);
   $phone = $idcom->quote($_POST['phone']);
   $msg = $idcom->quote($_POST['msg']);



   
//    $nom = valid_donnees($_POST['nom']);
//    $mail = valid_donnees($_POST['mail']);
//    $phone = valid_donnees($_POST['phone']);
//    $msg = valid_donnees($_POST['msg']);

   
//    function valid_donnees ($donnees){
//         $donnees = trim ($donnees);
//         $donnees = stripcslashes($donnees);
//         $donnees = htmlspecialchars($donnees);
//         return $donnees;
//    }

       

        $requete = "INSERT INTO portable 
        VALUES($id_client, $nom, $mail, $phone, $msg)";
        $nblignes = $idcom->exec($requete);

        if($nblignes!=1){
           $mess_erreur=$idcom->errorInfo();
           echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
           echo "<script type=\"text/javascript\">
           alert('Erreur : ".$idcom->errorCode()."')</script>"; 
        }
        else {
           echo "<script type=\"text/javascript\">
           alert('Vous êtes enregistré. Votre numéroro de msg est :
           ". $idcom->lastInsertId()."')</script>";
           $idcom = null;
        }
        
        //   header("location: remerciement.php");

        //  die();


       }else{
        echo "Veillez remplir tous les champs...";
    }

   }
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    
    <title>Master</title>

  
   
</head>
  
  <body>
            <form action="#" method="POST" enctype="application/x-www-form-urlencoded" class="form bg-white p-6 my-10  relative">
               
                <!-- <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div> -->
                <h3 class="text-2xl text-gray-900 font-semibold">Laissez-moi vous appeler !</h3>
                
                <div class="flex space-x-5 mt-3">
                    <input type="text" name="nom" required pattern="^[A-Za-z '-]+$" maxlength="20" placeholder="Votre Nom" class="border p-2  w-1/2">
                    <input type="tel" name="phone" id="" placeholder="Votre Numéro" maxlength="20"   
                       required class="border p-2 w-1/2">
                </div>
                   <input type="email" name="mail" id=""  required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{}[A-Za-z]{2,}$" placeholder="Votre Email" class="border p-2 w-full mt-3 ">
                   <textarea type="text" name="msg" id="" cols="10" rows="3" placeholder="Dites moi ce que vous desirez" class="border p-2 mt-3 w-full"></textarea>
                  <input type="submit" name="valider" class="w-full mt-6 bg-gray-400 hover:bg-gray-600 text-gray-800 font-semibold p-3">

            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
        
             <script>
                    if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                       }
             </script> 

  </body>
</html>
<?php
 include('foot.inc.php');
?>