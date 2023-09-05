<?php 
session_start();
// objectif de cefichier: voir si la chambre réservée est dispo a notre date ou nn est ce qu'elle est réservée avant ou nn
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";
if (isset($_POST['book'])){
    // recuperer les infos 
    $idRoom=htmlspecialchars($_POST ['id_room']);
    $startDate = htmlspecialchars($_POST['start_date']);
    $endDate = htmlspecialchars($_POST['end_date']);
    $price=htmlspecialchars($_POST['price']);
    // conversion en date 
    $startDate=strtotime($startDate);
    $endDate=strtotime($endDate);

    $duration=$endDate-$startDate;

    //echo $duration

    $nbDays=$duration /86400 ;
    echo "le nombre de jours est : $nbDays";
    // se connecter a la base de donnes
    $db=dbConnexion();
    //preparer la reqyete pour verifier si la chambre est dispo entre la date de depart et la date de fin 
    $request=$db->prepare('SELECT * FROM bookings WHERE room_id=? AND booking_start_date <? AND booking_end_date > ? ');
    //executer la requete
    try{
      $request->execute(array($idRoom,$startDate,$endDate));
      // recuperer le resultat 
      $books=$request->fetch();
      if(empty($books)){
        if($startDate < $endDate){
            // preparer la requete pour reserver la chambre 
            $request=$db->prepare("INSERT INTO `bookings`( `booking_start_date`, `booking_end_date`, `user_id`, `room_id`, `booking_price`, `bookig_state`) VALUES (?,?,?,?,?,?)");
        }
      }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}