<?php include_once "../inc/header.php"; ?>

<div class="container">
    <form action="../model/db_hotel.php" method="post">


        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="email" name="name_hotel">
        </div>


        <div class="form-group">
            <label for="email">Location:</label>
            <input type="text" class="form-control" id="email" name="location_hotel">
        </div>

        <div class="form-group">
            <label for="password">Capacity :</label>
            <input type="number" class="form-control" id="password" name="capacity_hotel">
        </div>



        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_hotel" value="submit">Add hotel</button>
    </form>

</div>
<?php include_once "../inc/footer.php"; ?>