<?php
include "includes/data.php";

if(isset($_POST['deleteBTN'])) {
    $productIndex = $_POST['deleteBTN'];
    Cart::removeFromCart($products[$productIndex]);
    header('Location: cart.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
    integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
    <header>
        <h1>Shopping Cart</h1>
    </header>

    <form action="" method="POST">
        <div class="container">
        <h2>Cart</h2>

        <div id="cart-items">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        if (!empty(Cart::getItems())){
                            foreach(Cart::getItems() as $index => $item): 
                        ?>
                            <tr>
                                <td class="w-25">
                                    <img src="<?=  $item['product']->getImgUrl() ; ?>" class="w-25" alt="<?= $item['product']->getName() ?>">
                                </td>
                                <td>
                                    <?= $item['product']->getName() ?>
                                </td>
                                <td>
                                    <button name="deleteBTN" class="btn btn-danger" value="<?= $index ?>">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                            <?php }else{ ?>
                                <tr>
                                    <td colspan="3">
                                        <div class="alert alert-warning" role="alert">
                                            No Products Found!
                                        </div>
                                    </td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        <div id="cart-total">
            <h3>Total items: <?= count(Cart::getItems()); ?></h3>
            <h3>Total Price: <?= Cart::getTotalPrice(); ?></h3>
        </div>

        </div>
    </form>

    <footer>
        <p>&copy; Online Store Shopping Cart</p>
    </footer>

    </body>
</html>