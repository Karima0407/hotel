<?php 
require_once $_SERVER ["DOCUMENT_ROOT"]."/hotel/inc/database.php" ;

//1ere fonction:
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

//2eme fonction:
function roomlist()
{
    // se connecter a la base de données ou db (data base)
    $db = dbConnexion();
    // preparer la requete 
    $request = $db->prepare("SELECT * FROM rooms ");
    //executer la requete
    $listRoom = null;
    try {
        $request->execute();
        //recuperer le resultat dans un tableau
        $listRoom = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $listRoom;

}
// Remarque :
//<?php echo ==> <?=