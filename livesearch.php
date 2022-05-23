<?php
include 'dbconnect.php';
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * from users where property_name Like '%".$search."%'
	OR property_type Like '%".$search."%'
	OR property_price Like '%".$search."%'
	OR property_status Like '%".$search."%'
	OR city Like '%".$search. "%'
	";
	}
	else{
	$query = "
	select * from property ORDER BY property_id";
	}
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0){
	$output .='<div clas = "table-responsible">
	<tr>
	<th>Customer Name</th>
	<th>Address</th>
	<th>City</th>
	<th>Postalcode</th>
	<th>Country</th>
	';
	while($rows = mysqli_fetch_array($result)){
	$output .='
	<tr>
	<td>'.$rows["property_name"]. '</td>
	<td>'.$rows["property_type"]. '</td>
	<td>'.$rows["property_price"]. '</td>
	<td>'.$rows["property_status"]. '</td>
	<td>'.$rows["city"]. '</td>
	</tr>
	';
	}
	echo $output;
	}
	else{
	echo 'Data not found';
	}
	?>