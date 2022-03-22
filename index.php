<?php
include_once 'Code/dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
	<title>Kikwetu Gaming Shop</title>
</head>
<body>
<nav class="navbar"></nav>
<script src="JS/nav.js"></script>
<header class="hero-section">
    <div class="content">
    </div>

    <center><div class="card" style="width: 70%">
        <?php
            $query = "SELECT * FROM products ORDER BY pid ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>

                        <form method="post" action="Cart.php?action=add&pid=<?php echo $row["pid"]; ?>">

                            <div class="product">
                                <center><img src="Uploads/<?php echo $row["image"]; ?>" class="img-responsive"></center>
                                <br><h5 class="text-info"><?php echo $row["description"]; ?></h5>
                                <br><h5 class="text-danger">Kshs <?php echo $row["price"]; ?></h5>
                                <!--<input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart" onclick="return confirm('Add item to cart?')">-->
                            </div>
                        </form>
                    <?php
                }
            }
        ?>
 </div>
</center>
</header>
</body>
</html>