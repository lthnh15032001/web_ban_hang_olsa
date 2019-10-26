<?php 
include "db.php";
$id = $_POST['id'];
$sql = "SELECT * FROM image WHERE id = '$id'";
$query = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($query);
echo '<div class="container">
<div class="row">';
 echo '<img class="img-cafe" src="img/product/'.$row['name'].'" class="" alt="">';
 echo '</div>
</div>';
 ?>
