<?php
session_start();

include "html.php";

include "header.php";

$quan = htmlspecialchars($_POST['quan']);
$quan2 = htmlspecialchars($_POST['quan2']);
$quan3 = htmlspecialchars($_POST['quan3']);

$name = $_POST['name'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
?>

<div class="container">
    <h4 class="text-primary">Review Items and Information</h4>
    <br>
    <div class="row">
        <div class="col border-right">
            <p class="font-weight-bold">Items</p>

            <?php echo $quan ?>
            <?php echo $quan2 ?>
            <?php echo $quan3 ?>
        </div>
        <div class="col">
            <p class="font-weight-bold">Personal Information</p>

            <?php echo $name ?>
            <?php echo $address ?>
            <?php echo $phoneNumber ?>
        </div>

    </div>

    <hr>
    <div class="row d-flex justify-content-center mt-5">
        <a href="" class="btn btn-primary btn-sm">Place Order</a>
    </div>



</div>

</body>
</html>
