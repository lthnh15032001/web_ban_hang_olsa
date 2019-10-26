<?php 
include "db.php";
	$id = $_POST['id'];
	$output = '';
	$sql = "SELECT * FROM xaphuongthitran WHERE maqh = '$id'";
	$query = mysqli_query($connection,$sql);
	$output .= '<option disabled> Chọn xã</option>';
	while ($row = mysqli_fetch_assoc($query)) {
		$output .='<option value="'.$row['xaid'].'">'.$row['name'].'</option>';
	}
	echo $output;
 ?>