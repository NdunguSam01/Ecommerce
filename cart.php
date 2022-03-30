<?php 
include 'dbConfig.php';
session_start();
/*$uri=$_SERVER['REQUEST_URI'];
echo $uri;*/

if (isset($_POST["add"]))
{
    if (isset($_SESSION["cart"]))
    {
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        if (!in_array($_GET["pid"],$item_array_id))
        {
            $count = count($_SESSION["cart"]);
            $item_array = array(
            'product_id' => $_GET["pid"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
                
            echo '<script>alert("Product has been added to cart!")</script>';
            echo '<script>window.location="Cart"</script>';
        }

        else
        {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="Cart"</script>';
        }
    }
        else
        {
        $item_array = array(
        'product_id' => $_GET["pid"],
        'item_name' => $_POST["hidden_name"],
        'product_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
        }
}

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "delete")
    {
        foreach ($_SESSION["cart"] as $keys => $value)
        {
            if ($value["product_id"] == $_GET["pid"])
            {
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed!")</script>';
                    echo '<script>window.location="Cart"</script>';
            }
        }
    }
}
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == "deleteAll") 
    {
        foreach ($_SESSION['cart'] as $keys => $value) 
        {
            unset($_SESSION['cart'][$keys]);
            echo '<script>alert("Cart has been emptied!")</script>';
            echo '<script>window.location="Cart"</script>';
        }
    }
}
    
if (isset($_GET["action"]))
{
    if ($_GET["action"] == "order")
    {
        foreach ($_SESSION["cart"] as $keys => $value)
        {
            if ($value["product_id"] == $_GET["pid"])
            {
                $id=$value['product_id'];
                $pname=$value['item_name'];
                $quantity=$value['item_quantity'];
                $price=$value['amount'];

                $insert="INSERT INTO orders(itemID,pName,quantity,price) VALUES ('$id','$pname','$quantity','$price')";
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been ordered successfully!")</script>';
                echo '<script>window.location="Cart"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/cart.css">
    <link rel="stylesheet" type="text/css" href="CSS/home.css">
    <title>Shopping Cart</title>
</head>
<body background="https://th.bing.com/th/id/R.96142d5bd8a2052b13ee478d7a8bfebf?rik=sTZVEFGJNmPvMg&pid=ImgRaw">
<nav class="navbar"></nav>

  <h1 class="title2">Shopping Cart Details</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="20%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="13%">Total Price</th>
                <th width="13%">Remove</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>Kshs <?php echo $value["product_price"]; ?></td>
                            <td>
                                Kshs <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="cart.php?action=delete&pid=<?php echo $value["product_id"]; ?>" onclick="return confirm('Remove item?');" ><img src="img/delete.png"></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right" >Total</td>
                            <th align="right">Kshs <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
            <br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="cart.php?action=deleteAll" onclick="return confirm('Are you sure you want to clear the cart?');" class="button">Empty Cart</a>
            <br>
    <center>
    <a href="Checkout" class="button">Checkout</a>
    </center>
<br>
        </div>

<footer></footer>

<script src="JS/nav.js"></script>
<script src="JS/footer.js"></script>
</body>
</html>