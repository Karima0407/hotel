<?php 
require_once "../inc/database.php" ;

function hotelList(){
    // se connecter a la base de données ou db (data base)
$db=dbConnexion();
    // preparer la requete 
    $request= $db->prepare("SELECT * FROM hotels ");
    //executer la requete
    $listHotel=null;
    try {
    $request->execute();
    //recuperer le resultat dans un tableau
    $listHotel=$request->fetchAll(PDO::FETCH_ASSOC);
    }catch( PDOException $e){
     echo $e->getMessage();
    }

    return $listHotel;

}