<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','kiruban','pollachiguide') or die("Database Error");
	$sql="SELECT category FROM search_box where category LIKE '%$my_data%' ORDER BY category";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['category']."\n";
		}
	}
?>