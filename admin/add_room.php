<?php include_once "../inc/header.php"; ?>
<?php require_once "../model/functions.php" ; ?>
<?php $listHotel=hotelList(); ?>

<div class="container">
    <form action="../model/db_room.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
            <label >Hotel:</label>
            <select name="hotel" id="">
                <option value="">Choose hotel</option>
               <?php foreach ($listHotel as $hotel){ ?>
                 <option value="<?= $hotel['id_hotel'] ?>"><?= $hotel ['hotel_name']?></option>
              <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="firstname">Room Number :</label>
            <input type="text" class="form-control" id="firstname" name="room_number">
        </div>

        <div class="form-group">
            <label for="lastname">Room Price :</label>
            <input type="text" class="form-control" id="lastname" name="room_price">
        </div>

        <div class="form-group">
            <label for="email">Persons</label>
            <input type="number" class="form-control" id="email" name="persons">
        </div>

        <div class="form-group">
            <label for="password">Category:</label>
            <select name="category" id="">
               <option value="">Choose category</option>
               <option value="classic">Classic</option>
               <option value="vip">Vip</option>
            </select>
        </div>

        <div class="form-group">
            <label>Photo:</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_room" value="submit">Submit</button>
    </form>
</div>

<?php include_once "../inc/footer.php"; ?>