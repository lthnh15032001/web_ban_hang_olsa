<?php 
include "db.php";
	$id = $_POST['id'];
	$output = '';
	$sql = "SELECT * FROM quanhuyen WHERE matp = '$id'";
	$query = mysqli_query($connection,$sql);
	$output .= '<option disabled> Chọn huyện</option>';
	while ($row = mysqli_fetch_assoc($query)) {
		$output .='<option value="'.$row['maqh'].'">'.$row['name'].'</option>';
	}
	echo $output;
 ?>