<?php
include_once '../dbConfig.php';

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "restore")
    {
    	
    	$id=$_GET['pid'];
    	$date=date("d-m-Y");
        $query=mysqli_query($con,"UPDATE products SET isDeleted=b'0',RestoredDate='$date' WHERE pid='$id' ");
        echo '<script>alert("Product has been restored!")</script>';
        echo '<script>window.location="Delete"</script>';

    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/View.css">
	<title>Deleted Items</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRgivTK7Gx3WTfTKCF2ed-f_XN6-2kxUa2Tqg&usqp=CAU"> 
	<a href="View">Available Items</a>
	<h1>Deleted Items</h1>
	<table>
	<tr>
		<th>Image</th>
		<th>Description</th>
		<th>Price</th>
		<th>Restore</th>
	</tr>
	<tr>
		
	</tr>

	<?php
	$results_per_page=10;

	$query = "SELECT * FROM products WHERE isDeleted=1";
	$result=mysqli_query($con,$query);
	$no_of_results=mysqli_num_rows($result);

	$no_of_pages= ceil($no_of_results/$results_per_page);

	 	if (!isset($_GET['page'])) 
	 	{
	 		$page=1;
	 	}
	 	else
	 	{
	 		$page=$_GET['page'];
	 	}

	 	$this_page_first_result=($page-1)*$results_per_page; 

	 	$sql="SELECT * FROM products WHERE isDeleted=1 LIMIT ".$this_page_first_result. ",".$results_per_page;
	 	$result=mysqli_query($con,$sql);
	 	
	 	if ($result->num_rows>0) 
	{
		while ($row=$result->fetch_assoc()) 
		{
			echo "<td><img src='../Uploads/".$row['image']."'></td>" ;
			echo "<td>".$row["description"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td><a href=Delete?action=restore&pid=".$row['pid']." >Restore</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "0 Results";	
	}

	
	for ($page=1;$page<=$no_of_pages;$page++) 
	{

  	echo '<a href="Delete?page=' . $page . '">' . $page . '</a> ';
	}
	?>

</table>
	
</body>
</html>


