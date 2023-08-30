<?php 
function dbConnexion(){
    $connexiondb=null;
    try{
        $connexiondb=new PDO("mysql:host=localhost;dbname=hotel_db" ,"root","" );
    }catch(PDOException $e){
     $connexiondb=$e->getMessage();

    }
    return $connexiondb;
}