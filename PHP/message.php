<?php
   include_once 'Connexion.php';

try {

if (isset($_POST['envoi'])) {

    if ( !empty($_POST['contenu'])){
        
        //saut de ligne avec nl2br
        $description = nl2br( htmlspecialchars($_POST['contenu']));
        
        $req = $bdd -> prepare ('INSERT INTO Messages (contenu) VALUES (:contenu)');
        $req -> execute( array( 'contenu'=> $description  ));
        
        
        // $_POST['envoi'] = false;
    }
    else {
        
        echo " veuillez remplir tous les champs...";
    } 
}else {
    # code...
    echo "nothing to do";
}
              

} catch (Exception $e) {

die('error :' . $e->getMessage());
}