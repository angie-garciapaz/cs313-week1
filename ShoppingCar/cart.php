<?php
session_start();

include "html.php";
include "header.php";


$quan = htmlspecialchars($_POST['quan']);
$quan2 = htmlspecialchars($_POST['quan2']);
$quan3 = htmlspecialchars($_POST['quan3']);
$pId1 = "iPhone 12";
?>

<div class="container mt-3 mx-auto text-center">
    <form method="get" action="checkout.php">
        <div class="row mb-3">
            <div class="col">
                You added <?php echo $quan ?> iPhone 11('s) to your cart!<br>
            </div>
            <div class="col ">
                <a href="" class="btn btn-danger text-uppercase btn-sm">X</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                You added <?php echo $quan2 ?> iPhone 11('s) to your cart!<br>
            </div>
            <div class="col ">
                <a href="" class="btn btn-danger text-uppercase btn-sm">X</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                You added <?php echo $quan3 ?> iPhone 11('s) to your cart!<br>
            </div>
            <div class="col ">
                <a href="" class="btn btn-danger text-uppercase btn-sm">X</a>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col text-center">
                <a href="index.php" class="btn btn-sm btn-warning mr-3">Back to Shop</a>
                <input type="submit" value="Checkout" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>


</div>

</div>
</body>
</html>