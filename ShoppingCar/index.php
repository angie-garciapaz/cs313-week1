<?php
session_start();

include "html.php";
include "header.php";

?>


<div class="container mt-3">
    <div class="row justify-content-center">

        <form action="cart.php" method="post">
            <div class="row">
                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top" src="images/iphone-xr-black-select-201809.png" alt="Card image cap">
                    <div class="card-body text-center">
                        Qty: <input type="number" name="quan" id="quan" min="1" max="10" class="w-25">

                    </div>

                </div>

                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top" src="images/iphone-xr-yellow-select-201809.png" alt="Card image cap">
                    <div class="card-body text-center">
                        Qty: <input type="number" name="quan2" id="quan2" min="1" max="10" class="w-25">

                    </div>

                </div>

                <div class="card border-0" style="width: 18rem;">
                    <img class="card-img-top" src="images/iphone-xr-blue-select-201809.png" alt="Card image cap">
                    <div class="card-body text-center">
                        Qty: <input type="number" name="quan3" id="quan3" min="1" max="10" class="w-25">
                    </div>

                </div>
            </div>
            <div class="row d-flex justify-content-center">
            <input type="submit" class=" btn btn-primary">
            </div>
        </form>

    </div>


</div>

</body>
</html>