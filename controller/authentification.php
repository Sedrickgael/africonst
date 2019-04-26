<?php

// inscription

if(isset($_POST['inscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenoms = htmlspecialchars($_POST['prenoms']);
   $email = htmlspecialchars($_POST['email']);
   $tel = htmlspecialchars($_POST['tel']);
   $password = sha1($_POST['password']);
   if(!empty($_POST['nom']) AND !empty($_POST['prenoms']) AND !empty($_POST['email']) AND !empty($_POST['tel']) AND !empty($_POST['password'])) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM user WHERE email = ?");
               $reqmail->execute(array($email));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($password<6) {
                     $insertmbr = $bdd->prepare("INSERT INTO user(nom, prenoms, email, tel, password) VALUES(?, ?, ?,?,?)");
                     $insertmbr->execute(array($nom, $prenoms, $email, $tel, $password));
                     $erreur = "Votre compte a bien été créé !";
                  } else {
                     $erreur = "Vos mots de passes un court!";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         }  else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

// inscription entreprise

if(isset($_POST['register'])) {
   $nom_ent = htmlspecialchars($_POST['nom_ent']);
   $email_ent = htmlspecialchars($_POST['email_ent']);
   $type_ent = htmlspecialchars($_POST['type_ent']);
   $loc_ent = htmlspecialchars($_POST['loc_ent']);
   $contact_ent = htmlspecialchars($_POST['contact_ent']);
   $description_ent = htmlspecialchars($_POST['description_ent']);
   $password = sha1($_POST['password']);
   if(!empty($_POST['nom_ent']) AND !empty($_POST['email_ent']) AND !empty($_POST['type_ent']) AND !empty($_POST['loc_ent']) AND !empty($_POST['contact_ent'])AND !empty($_POST['description_ent']) AND !empty($_POST['password'])) {
            if(filter_var($email_ent, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM entreprises WHERE email = ?");
               $reqmail->execute(array($email_ent));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($password<6) {
                     $insertmbr = $bdd->prepare("INSERT INTO entreprises(nom_ent, email_ent, type_ent, loc_ent, contact_ent, description_ent, password) VALUES(?, ?, ?,?,?, ?, ?)");
                     $insertmbr->execute(array($nom_ent, $email_ent, $type_ent, $loc_ent, $contact_ent, $description_ent, $password));
                     $erreur = "Votre compte a bien été créé !";
                  } else {
                     $erreur = "Vos mots de passes un court!";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         }  else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>