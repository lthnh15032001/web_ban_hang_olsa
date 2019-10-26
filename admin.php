<html>
	<head>
    <?php include "db.php"; ?>
		<title>OLSA SHOP :: developer</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link rel='stylesheet' href="css/style.css">
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.theme.default.min.css">
	</head>
	<body>
		<div class="container">
			<h2 style="margin-top: 50px;" align="center">Sản phẩm đang được đặt hàng</h2>
			<div class="row">
				<div class="table">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Tên khách hàng</th>
								<th>Số điện thoại</th>
								<th>Nơi ở</th>
								<th>Đơn hàng</th>
								<th>Tin nhắn</th>
								<th>Thời gian đặt hàng</th>
								<th>Tools</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php 
									$sql = "SELECT * FROM cart";
									$query = mysqli_query($connection,$sql);
									while($row = mysqli_fetch_assoc($query))
									{
										$tinh = $row['tinh'];
										$huyen = $row['huyen'];
										$xa = $row['xa'];
										echo "<tr>";
										echo "<td>".$row['id']."</td>";
										echo "<td>".$row['name']."</td>";
										echo "<td>".$row['sdt']."</td>";
										$sql_tinh = "SELECT * FROM tinhthanhpho WHERE matp ='$tinh'";
										$sql_huyen = "SELECT * FROM quanhuyen WHERE maqh ='$huyen'";
										$sql_xa = "SELECT * FROM xaphuongthitran WHERE xaid ='$xa'";
										$query_tinh = mysqli_query($connection,$sql_tinh);
										$query_huyen = mysqli_query($connection,$sql_huyen);
										$query_xa = mysqli_query($connection,$sql_xa);
										$row_tinh = mysqli_fetch_array($query_tinh);
										$row_huyen = mysqli_fetch_array($query_huyen);
										$row_xa = mysqli_fetch_array($query_xa);
										echo "<td>".$row['address']." ".$row_tinh['name']." ".$row_huyen['name']." ".$row_xa['name']."</td>";
										echo "<td>".$row['cart']."</td>";
										echo "<td>".$row['message']."</td>";
										echo "<td>".$row['time_buy']."</td>";
										echo "<td></td>";
										echo "</tr>";
									}

								?>	
							</tr>
						</tbody>	
					</table>
				</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/index.js"></script>	
    <script type="text/javascript" src="OwlCarousel/dist/owl.carousel.js" ></script>
</html>