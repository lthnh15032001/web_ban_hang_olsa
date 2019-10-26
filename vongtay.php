<section class="binh_ca_phe" id="section4">
        <h3> VÒNG TAY CUNG HOÀNG ĐẠO <strong style="color: red;">(<del>149k</del> >> 89k)</strong></h3>
        <div class="row" style="margin-top: 36px;">
          <div class="col-md-4" id="image_vongtay" style="">
          </div>
          <div class="col-md-8">
            <ul style="line-height: 31px;">
              <ol><strong>Thông tin sản phẩm</strong></ol>
              <ol>- Vòng dẻo, mặt inox không bị hoen rỉ, khắc cung hoàng đạo bằng công nghệ laser.</ol>
              <ol>- Thiết kế độc quyền theo ngày tháng sinh của khách hàng.</ol>
              <ol>- Freesize, tự điều chỉnh kích thước theo cỡ tay của bạn.</ol>
              <ol>- Phù hợp làm quà tặng sinh nhật, phụ kiện đi phượt, bàn làm việc,..</ol>
            </ul>
            <ul>
              <form method ="POST" action="">
                <div class="row">
                  <div class="col-md-6 col-6">
                    <?php $sql = "SELECT * FROM product WHERE id BETWEEN 13 AND 18";
                    $query = mysqli_query($connection,$sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                      echo '<ol>
                  <div class="radio">
                      <label><input id="test2'.$row['id'].'" type="radio" name="optradio" value="'.$row['id'].'">'.$row['name'].'</label>
                  </div>
                </ol>';
                    }
                  echo "</div>";
                  echo '<div class="col-md-6 col-6">';
                    $sql2 = "SELECT * FROM product WHERE id BETWEEN 19 AND 24";
                    $query2 = mysqli_query($connection,$sql2);
                    while ($row2 = mysqli_fetch_assoc($query2)) {
                      echo '<ol>
                  <div class="radio">
                      <label><input id="test2'.$row2['id'].'" type="radio" name="optradio" value="'.$row2['id'].'">'.$row2['name'].'</label>
                  </div>
                </ol>';
                    }

                     ?> 
                   </div>
              </div>
                
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-6" style="text-align: center; padding-left: 0px"><input type="submit" name="buy" class="btn btn-primary" value="Mua ngay theo giá sale"></div>
                    <div class="col-md-6" style="text-align: center; padding-left: 0px"><a href="#" class="btn btn-primary">Mua theo combo sale</a></div>
                  </div>
              
            </ul>
          </form>
          </div>
        </div>
      </section>