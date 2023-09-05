<?php 
session_start();
// si $_SESSION ['role] est définie mais que sa valeur est differente de, "admin" ou encore que $_SESSION ['role'] n'est pas définie


if(!isset($_SESSION['role'])||$_SESSION['role'] !="admin"){
  header("Location: http//localhost/hotel/login.php");
}
?>

<?php include_once "../inc/header.php"; ?>

<div class="container d-flex justify-content-aroud ">
    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>

        <div class="card-body">
            <h5 class="card-title">Ajout hotel</h5>
            <p class="card-text">Cliquez ici pour ajouter un hotel</p>
            <a href="add_hotel.php" class="btn btn-primary">Ajoutez un hotel</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>

        <div class="card-body">
            <h5 class="card-title">Ajout chambre </h5>
            <p class="card-text">Cliquez ici pour ajouter une chambre</p>
            <a href="add_room.php" class="btn btn-primary">Ajoutez une chambre</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>

        <div class="card-body">
            <h5 class="card-title">Liste reservations</h5>
            <p class="card-text">Cliquez ici pour voir la liste des reservations</p>
                <a href="#" class="btn btn-primary">Liste reservation</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>

        <div class="card-body">
            <h5 class="card-title">Liste hotel</h5>
            <p class="card-text">Cliquez ici pour voir la liste des hotels</p>
                <a href="hotel_list.php" class="btn btn-primary">Liste hotel</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>

        <div class="card-body">
            <h5 class="card-title">Liste chambres</h5>
            <p class="card-text">Cliquez ici pour voir la liste des chambres</p>
                <a href="room_list.php" class="btn btn-primary">Liste chambre</a>
        </div>
    </div>
</div>

<?php include_once "../inc/footer.php"; ?>