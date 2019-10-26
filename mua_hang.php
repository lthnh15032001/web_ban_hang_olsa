<section id="muahang">
	<h3>FEED BACK TỪ KHÁCH HÀNG</h3>
	<div class="row" style="margin-top: 36px;">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<h4>Thông tin mua hàng</h4>
			<form action="" method="POST">
				<div class="form-group">
					<input required type="text" class="form-control" placeholder="Họ và tên người nhận" name="name">
				</div>
				<div class="form-group">
					<input required type="number" class="form-control" placeholder="Số điện thoại nhận hàng" name="sdt">
				</div>
				<div class="row">
             				<div class="col-md-12" style="text-align: left;"><label style="color: black;" for="">Chọn nơi bạn nhận hàng: </label></div>
			                <div class="col-md-4">
			                  <select required="" id="tinh" title="Chọn tỉnh" class="form-control" name="tinh">
			                  	<option disabled>Chọn tỉnh</option>
			                    <?php $sql_tinh = "SELECT * FROM tinhthanhpho";
			                   	$query_tinh = mysqli_query($connection,$sql_tinh);
			                   	while ($row_tinh = mysqli_fetch_assoc($query_tinh)) {
			                   		echo "<option value=".$row_tinh['matp'].">".$row_tinh['name']."</option>";
			                   	}
			                     ?>
			                  </select>
			                </div><br>
			                <div class="col-md-4">
			                  <select required=""  id="huyen" title="Chọn huyện" class="form-control" name="huyen">
			                    	<option disabled>Chọn huyện</option>
			                  </select>
			                </div><br>
			                <div class="col-md-4">
			                  <select required="" class="form-control" id="xa"  title="Chọn quận/ xã" data-size="7" name="xa">
			                    <option disabled> Chọn xã</option>
			                    
			                  </select>
			                </div>
			        </div><br>
			    <div class="form-group">
					<input required type="text" class="form-control" placeholder="Nhập địa chỉ chi tiết của bạn (số nhà, ngõ,...)" name="address">
				</div>
				<div class="form-group">
					<input required type="text" class="form-control" placeholder="Giỏ hàng" name="cart" id="cart">
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Lời nhắn thêm cho chủ shop" name="message"></textarea> 
				</div>
				<div class="form-group" style="text-align: center;">
             		<input required type="submit" class="btn btn-primary" name="add" value="Mua hàng">
             	</div>
			</form>
		</div>
	</div>
	<?php if (isset($_POST['add'])) {
		$name = $_POST['name'];
		$sdt = $_POST['sdt'];
		$tinh = $_POST['tinh'];
		$huyen = $_POST['huyen'];
		$xa = $_POST['xa'];
		$address = $_POST['address'];
		$cart = $_POST['cart'];
		$message = $_POST['message'];
		$sql = "INSERT INTO cart(name, sdt, tinh, huyen, xa, address, cart, message, time_buy) VALUES ('{$name}','{$sdt}','{$tinh}','{$huyen}','{$xa}','{$address}','{$cart}','{$message}', NOW())";
		$query = mysqli_query($connection,$sql);
		if ($query) {
			echo "lê thành đạt";
		}
		else
		{
			echo "ngu vl";
		}

	} ?>
</section>