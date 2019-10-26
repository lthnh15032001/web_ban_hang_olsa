<section class="binh_ca_phe" id="section3">
        <h3> BÌNH CÀ PHÊ GIỮ NHIỆT CUNG HOÀNG ĐẠO <strong style="color: red;">(<del>369k</del> >> 239k)</strong></h3>
        <div class="row" style="margin-top: 36px;">
          <div class="col-md-4" id="image_binh" style="">
          </div>
          <div class="col-md-8">
            <ul style="line-height: 31px;">
              <ol><strong>Thông tin sản phẩm</strong></ol>
              <ol>- Inox 204 trong và 301 ngoài giữ nhiệt 12 tiếng</ol>
              <ol>- Thiết kế độc quyền theo ngày tháng sinh của khách hàng.</ol>
              <ol>- Lớp vỏ bên ngoài được sơn tĩnh điện khô, không bay, phai màu.</ol>
              <ol>- Phù hợp làm quà tặng sinh nhật, phụ kiện đi phượt, bàn làm việc,..</ol>
              <ol>- Dung tích: 450ml, chiều cao 24cm</ol>
            </ul>
            <ul>
              <form method ="POST" action="">
                <div class="row">
                  <div class="col-md-6 col-6">
                    <?php $sql = "SELECT * FROM product WHERE id BETWEEN 1 AND 6";
                    $query = mysqli_query($connection,$sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                      echo '<ol>
                  <div class="radio">
                      <label><input id="test1'.$row['id'].'" type="radio" name="optradio" value="'.$row['id'].'">'.$row['name'].'</label>
                  </div>
                </ol>';
                    }
                  echo "</div>";
                  echo '<div class="col-md-6 col-6">';
                    $sql2 = "SELECT * FROM product WHERE id BETWEEN 7 AND 12";
                    $query2 = mysqli_query($connection,$sql2);
                    while ($row2 = mysqli_fetch_assoc($query2)) {
                      echo '<ol>
                  <div class="radio">
                      <label><input id="test1'.$row2['id'].'" type="radio" name="optradio" value="'.$row2['id'].'">'.$row2['name'].'</label>
                  </div>
                </ol>';
                    }

                     ?> 
              </div>
                
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-6" style="text-align: center; padding-left: 0px"><a href="#muahang" class="btn btn-primary">Mua ngay giá sale</a></div>
                    <div class="col-md-6" style="text-align: center; padding-left: 0px"><a href="#" class="btn btn-primary">Mua theo combo sale</a></div>
                  </div>
              
            </ul>
          </form>
          </div>
        </div>
      </section>