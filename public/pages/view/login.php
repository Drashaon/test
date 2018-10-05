<?php
  require '../controller/index.php'; //Lien vers ficihers php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Acceuil</title>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="icon" type="../image/ico" href="../img/logo/favicon.ico" />
</head>

<body>
   <div align="center">
      <h2>Inscription</h2>
      <br /><br />
      <form method="POST" action="">
         <table>
            <tr>
               <td align="right">
                  <label for="pseudo">Pseudo :</label>
               </td>
               <td>
                  <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
               </td>
            </tr>
            <tr>
               <td align="right">
                  <label for="mail">Mail :</label>
               </td>
               <td>
                  <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
               </td>
            </tr>
            <tr>
               <td align="right">
                  <label for="mail2">Confirmation du mail :</label>
               </td>
               <td>
                  <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
               </td>
            </tr>
            <tr>
               <td align="right">
                  <label for="mdp">Mot de passe :</label>
               </td>
               <td>
                  <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
               </td>
            </tr>
            <tr>
               <td align="right">
                  <label for="mdp2">Confirmation du mot de passe :</label>
               </td>
               <td>
                  <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
               </td>
            </tr>
            <tr>
               <td></td>
               <td align="center">
                  <br />
                  <input type="submit" name="forminscription" value="Je m'inscris" />
               </td>
            </tr>
         </table>
      </form>
      <?php
      if(isset($erreur)) {
         echo '<font color="red">'.$erreur."</font>";
      }
      ?>
   </div>
</body>
