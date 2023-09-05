<?php
include_once "inc/header.php";
require_once "model/functions.php";
$listRoom = roomlist();
?>

<div class="container d-flex flex-wrap">
    <?php foreach ($listRoom as $room) { ?>
        <div class="card" style="width: 18rem;">
        <div class="img-room">
            <img src="assets/imgs/<?= $room['room_imgs'] ?>" class="card-img-top" alt="image">
        </div>
            
            <div class="card-body">
                <p class="card-text">
                    <?= $room['price']; ?>€/nuit
                </p>
                <p class="card-text">
                    <?= $room['category']; ?>
                </p>
                <p class="card-text">
                    <?= $room['persons']; ?> Persons
                </p>
                <a class="btn btn-danger" href="booking.php?room=<?= $room ['id_room']; ?> &price=<?=$room['price']?>">Book this Room</a>
            </div>
        </div>

    <?php } ?>

</div>
<?php include_once "inc/footer.php";