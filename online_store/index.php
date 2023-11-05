<?php
include "includes/data.php";

if(isset($_POST['addBTN'])) {
  $productIndex = $_POST['addBTN'];
  Cart::addToCart($products[$productIndex]);
  header('Location: cart.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Online Store</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"
    integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <header>
      <h1>Online Store</h1>
    </header>

    <form method="POST" action="">

    <div class="container">
      <h2>Products</h2>

      <?php
      foreach($products as $index => $product):
      ?>
        <div class="product">
          <img src="<?= $product->getImgUrl() ?>" alt=""/>
          <h3><?= $product->getName() ?></h3>
          <p><?= $product->getPrice() ?></p>
          <button type="submit" class="btn btn-primary" name="addBTN" value="<?= $index ?>">
            Add To Cart
          </button>
        </div>
      <?php 
      endforeach;
      ?>
    </div>
    </form>

    <footer>
      <p>&copy; Online Store</p>
    </footer>
  </body>
</html>