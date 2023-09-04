<?php
require_once "../inc/database.php";
if(isset($_POST['submit'])){
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    //etablir la connexion avec la bd
    $db=dbConnexion();
    //preparer la requete
    $request=$db->prepare("SELECT *FROM users WHERE email=?");
    // executer la requete
    try{
        $request->execute(array($email));
        //recuperer le resultat de la requete
        $userInfo=$request->fetch();
        (PDO::FETCH_ASSOC); // pour retoourner un tableau associatif
        // echo '<pre>';
        // print_r($userInfo);
        // echo '<pre>';

        if(empty($userInfo)){
            echo 'utilisateur inconnu';
        }else{
            // verifier si le mot de passe est correct
            if(password_verify($password,$userInfo['password'])){
                // si l'utilisateur est un admin 
                if($userInfo['role']=="admin"){
                    header("Location: http://localhost/hotel/admin/admin.php");
                }else{
                   header("Location:user_home.php");
                }
            }else{
                echo "aah tu fais le mailin";
            }
        }

    }catch(PDOException $e){
      $e->getMessage();
    }
}