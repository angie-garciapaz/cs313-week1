<?php
session_start();
include "html.php";
include "header.php";


?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <form method="post" action="confirmation.php">
                <div class="form-group">
                    <label for="name">
                        Name:
                    </label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">
                        Address:
                    </label>
                    <input type="text" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">
                        Phone Number:
                    </label>
                    <input type="text" id="phoneNumber" class="form-control" min="10" max="10">
                </div>
                <div class="row d-flex justify-content-center">
                    <a href="cart.php" class="btn btn-warning btn-sm mr-2">Back to Cart</a>
                    <input type="submit" value="Confirm" name="Confirm" class="btn btn-sm btn-primary">
                </div>
            </form>


        </div>
    </div>


</div>
</body>
</html>
