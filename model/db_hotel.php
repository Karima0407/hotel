<?php 
require_once "../inc/database.php" ;
if(isset($_POST['add_hotel'])){
    $hotelName=htmlspecialchars($_POST['name_hotel']);
    $location=htmlspecialchars($_POST['location_hotel']);
    $capacityHotel=htmlspecialchars(($_POST['capacity_hotel']));


     $db=dbConnexion();
     $request=$db->prepare ("INSERT INTO hotels (hotel_name,location,capacity) VALUES (?,?,?)");
     try{
        $request-> execute(array($hotelName,$location,$capacityHotel));
        header("Location:http://localhost/hotel/admin/hotel_list.php");
     }catch(PDOException $erreur){
        $erreur->getMessage();
     }

     

}