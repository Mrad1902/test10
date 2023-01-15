<?php
$name = $_POST['nom'];
$mail = $_POST['mail'];
$objet = $_POST['objet'];
$msg = $_POST['message'];
$emai_subject = $objet;
$emai_body = "nom : $name.\n ".
        "email : $mail.\n ".
          "message : $msg.\n ";
$to="mradmohamed700@gmail.com";
$headers = "from me";
mail($to,$emai_subject,$emai_body,$headers);


header("Location: contact.html")
 

?>