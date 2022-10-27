<form action="" method="POST" align="center" style="padding: 10px;">
    
    <textarea name="contenu" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="envoi">

</form align="center">



<?php

    
try {
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=sujections', 'root', '', $pdo_options);

if (isset($_POST['envoi'])) {

    if ( !empty($_POST['contenu'])){

        

//saut de ligne avec nl2br
$description = nl2br( htmlspecialchars($_POST['contenu']));


$req = $bdd -> prepare ('INSERT INTO Messages (contenu)VALUES (:contenu)');
$req -> execute( array( 'contenu'=> $description  ));


$reponse = $bdd->query(" SELECT * FROM Messages");

while ($données = $reponse->fetch()) {
    ?>
    <div id="article" style="border: 1px solid black;">
    <p><?= $données['contenu'] ?> </p>
    
    <br>
   <?php
 }


 ##header('Location:article.php');


    }else {
        echo " veuillez remplir tous les champs...";
}
}
             

} catch (Exception $e) {

die('error :' . $e->getMessage());
}