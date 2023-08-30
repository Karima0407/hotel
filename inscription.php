<?php
require_once("inc/database.php");
if (isset($_POST['submit'])) {
  // recuperer les infos saisies par user
  $lastName = htmlspecialchars($_POST['lastname']);
  $firstname = htmlspecialchars($_POST['firstname']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $adress = htmlspecialchars($_POST['address']);
  $phoneNumber = htmlspecialchars($_POST['phone']);
  $birthday = htmlspecialchars($_POST['birthday']);
  $gender = htmlspecialchars($_POST['gender']);

  // crypter le mot de passe
  $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);
  //etablir une connexion avec la base de données
  $db = dbConnexion();
  //preparer la requete
  $request = $db->prepare("INSERT INTO users ( `last_name`, `first_name`, `email`, `password`, `birthday`, `adress`, `phone_number`, `gender`) VALUES (?,?,?,?,?,?,?,?)");
  //executer la requete
  try {
    $request->execute(array($lastName, $firstname, $email, $cryptedPassword, $birthday, $adress, $phoneNumber, $gender));
  } catch (PDOException $e) {
    echo $e->getMessage(); //afficher l'erreur sql genere 
  }
}