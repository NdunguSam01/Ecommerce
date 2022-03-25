<?php
include_once 'dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
	<title>Play Station 3</title>
</head>
<body>
<nav class="navbar"></nav>

<header class="hero-section">
    <div class="content">
    </div>

    <center><div class="card" style="width: 70%">
        <h1>Play Station 3</h1>
        <?php
            $query = "SELECT * FROM products WHERE category='ps3controller' OR category='ps3console' OR category='ps3game' ORDER BY pid ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) 
            {

                while ($row = mysqli_fetch_array($result)) 
                {

                    ?>
                    <div class="product">
                        <form method="post" action="Cart.php?action=add&pid=<?php echo $row["pid"]; ?>">

                            
                                <center><img src="Uploads/<?php echo $row["image"]; ?>" class="img-responsive"></center>
                                <br><h5 class="text-info"><?php echo $row["description"]; ?></h5>
                                <br><h5 class="text-danger">Kshs <?php echo $row["price"]; ?></h5>
                                <br>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["description"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <br><br>
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart" onclick="return confirm('Add item to cart?')">
                            
                        </form>
                        </div>
                    <?php
                }
            }
        ?>
 </div>
</center>
</header>


<footer></footer>

<script src="JS/nav.js"></script>
<script src="JS/footer.js"></script>
</body>
</html>