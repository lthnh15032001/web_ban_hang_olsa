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
      <section style="margin-top: 60px;" id="section1">
			<div class="row">
          <div class="col-md-4">
            <div class="owl-carousel owl-theme banner">
              <div class="container">
                <div class="row">
                  <div class="col-md-4" style="padding: 0;"><img style="width: 100%;" src="img/3_binh.jpg" alt=""></div>
                  <div class="col-md-4" style="padding: 0;"><img style="width: 100%;" src="img/binh.jpg" alt=""></div>
                  <div class="col-md-4" style="padding: 0;"><img style="width: 100%;" src="img/khan.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-md-8" style="text-align: center;">
            <h2>OLSA SHOP</h2>
            <hr style="border: black 1px solid">
            <h2>Sản phẩm 12 cung hoàng đạo</h2>
            <hr style="border: black 1px solid">
            <h2 style="margin-top: 40px; font-size: 40px;"><strong>Sale khủng tri ân khách hàng</strong></h2>
            <div class="button-watch"><a href="#section2" type="button" class="btn btn-danger">CLICK XEM NGAY </a href="section2"></div>
            <h4 style="margin-top: 20px;">Sản phẩm đang được hạ giá, chỉ còn :</h4>
            <div class="watch" style="font-size: 30px; color:red;"><p id="demo"></p></div>
            <div class="links"><a href="https://www.instagram.com/olsashop.vn/">https://www.instagram.com/olsashop.vn/</a></div>
          </div>  
			</div>
      <hr style="margin-top: 50px;">
      </section>
      <section class="product_love" id="section2">
        <h2 align="center" ><button style="width: 35%;" type="button" class="btn btn-danger">TOP SẢN PHẨM ĐƯỢC YÊU THÍCH</button></h2>
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/3_binh.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Bình giữ nhiệt</h5>
                <p class="card-text"><del>369k</del> <strong style="font-size: 20px">=></strong> 239k</p>
                <a href="#section3" class="btn btn-primary">Mua ngay</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/coc.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cốc cà phê</h5>
                <p class="card-text"><del>149k</del> <strong style="font-size: 20px">=></strong> 89k</p>
                <a href="#section5" class="btn btn-primary">Mua ngay</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/dongho.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Vòng tay</h5>
                <p class="card-text"><del>199k</del> <strong style="font-size: 20px">=></strong> 129k</p>
                <a href="#section4" class="btn btn-primary">Mua ngay</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/khan.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Khăn handmade</h5>
                <p class="card-text"><del>249k</del> <strong style="font-size: 20px">=></strong> 190k</p>
                <a href="#section6" class="btn btn-primary">Mua ngay</a>
              </div>
            </div>
          </div>

        </div>
      </section>
      <?php include "binhcaphe.php"; ?>
        <!--  -->
            <?php include "vongtay.php"; ?>
        <!--  -->
            <?php include "mua_hang.php"; ?>
        <!--  -->
            <?php include "feedback.php"; ?>
        <!--  -->
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/index.js"></script>	
    <script type="text/javascript" src="OwlCarousel/dist/owl.carousel.js" ></script>
    <script type="text/javascript">
          $('.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            autoWidth:true,
            autoHeight:true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:3
              },
              1000:{
                items:5
              }

            }
          });
    </script>

    <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor( 0 / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Display the result in the element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";

              // If the count down is finished, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
      </script>

      <script>
        $(document).ready(function(){
        <?php $sql_select = "SELECT * FROM product";
              $query_select = mysqli_query($connection,$sql_select);
              while ($row = mysqli_fetch_assoc($query_select)){
                
        ?>
        
          $('<?php echo "#test1".$row["id"]; ?>').change(function(){
            var id = $(this).val();
            $.ajax({
              url: "choose_binh.php",
              method: "POST",
              data: {id:id},
              success: function(data)
              {
                $('#image_binh').html(data);
              }
            })
          });
        
      <?php } ?>

      <?php $sql_select = "SELECT * FROM product";
              $query_select = mysqli_query($connection,$sql_select);
              while ($row = mysqli_fetch_assoc($query_select)){
                
        ?>
        
          $('<?php echo "#test2".$row["id"]; ?>').change(function(){
            var id = $(this).val();
            $.ajax({
              url: "choose_vongtay.php",
              method: "POST",
              data: {id:id},
              success: function(data)
              {
                $('#image_vongtay').html(data);
              }
            })
          });
        
      <?php } ?>



      })
      </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#tinh').change(function(){
        var id = $(this).val();
        $.ajax({
          url: "data_huyen.php",
          method: "POST",
          data: {id:id},
          success:function(data)
          {
            $('#huyen').html(data);
          }
        });
      });
      $('#huyen').change(function(){
        var id_huyen =$(this).val();
        $.ajax({
          url: "data_xa.php",
          method: "POST",
          data: {id:id_huyen},
          success:function(data)
          {
            $('#xa').html(data);
          }
        });
      });

    });

  </script>
	</body>
</html>

<input id="inputtext" type="text" value="Nhập giá trị">
<p id="giatriinputtext"></p>

<script>
    //Hàm đọc giá trị và hiện thị thông tin
    function textthaydoi() {
        var value = $( this ).val();
        $( "p#giatriinputtext" ).text( value );
    }

    //Bắt sự kiện keyup của textbox
    $( "#inputtext" ).keyup(textthaydoi);

    //Cho #inputext phát sinh một sự kiện keyup ban đầu
    $( "#inputtext" ).keyup();

</script>