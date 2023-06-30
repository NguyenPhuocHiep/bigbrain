<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DNTN CẤP NƯỚC HỮU HÒA</title>
  <link rel="shortcut icon" type="images/png" href="logoHD.jpg" />
  <meta name="description" content="Tra cứu thông tin khách hàng, lịch sử dùng nước và các cổng thanh toán online.">
  <meta name="keywords" content="DNTN CẤP NƯỚC HỮU HÒA, tra cuu, sua dung nuoc">
  <meta name="author" content="Big Brain">
  <meta content="thumb-bigbrain-soroban.tk.jpg" property="og:image" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <style>
    .info_label {
      background: url(arrow.png) left 3px bottom 5px no-repeat;
      padding-left: 10px;
      padding-top: 5px;
    }


    .table_docso th {
      background: #109de4;
      color: #ffffff;
      text-align: center;
      vertical-align: middle;

    }

    .table_docso td {
      background: #fcf8e3;
      vertical-align: middle;

    }


    .imglogo {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      width: 100px;
      height: 100px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-12">

      <h1 class="text-center" style="padding-top: 20px; color: blue">TRA LỊCH SỬ DÙNG NƯỚC</h1>
      <form class="row row-cols-lg-auto g-2 align-items-center" method="GET">
        <div class="col-12">
          <div>
            <input type="text" class="form-control" name="search" placeholder="Nhập số IDKH trong phiếu nước">
          </div>
        </div>
        <div class="col-12">

        </div>
        <div class="col-12">
          <button class="btn btn-primary">Tìm kiếm</button>
        </div>
      </form>
      <div class="row row-cols-lg-auto g-2 align-items-center" style="margin-top: 3px;">

        <?php


        $con = new PDO('mysql:host=localhost; dbname=capnuoc; charset=utf8', 'capnuoctra', 'Wt93DS8d!CsdvWe*');


        if (isset($_GET["search"])) {
          $str = $_GET["search"];
          $sth = $con->prepare("SELECT * FROM `DATA_TH` WHERE IDKH = '$str'");
          $sth->setFetchMode(PDO::FETCH_OBJ);
          $sth->execute();

          if ($row = $sth->fetch()) {
        ?>

            <div class="col-12">
              <div class="info_label col-12">
                <label> Số định danh IDKH : </label><b> <span><?php echo $row->IDKH; ?></span></b>
              </div>
              <div class="info_label col-12">

                <label> Tên Khách Hàng : </label><b> <span><?php echo $row->{'Tên Khách Hàng'}; ?></span></b>
                <!-- ten cot co dau cach nen can dung ngoac {''} -->

              </div>
              <div class="info_label col-12">
                <div>

                  <label> Số điện thoại : </label><b> <span><?php echo $row->{'Số điện thoại'}; ?></span></b>

                </div>
              </div>
              <div class="info_label col-12">
                <div>
                  <label> Ấp : </label><b> <span><?php echo $row->ẤP; ?></span></b>


                </div>
              </div>
              <div class="info_label col-12">
                <div>
                  <label> Các cổng thanh toán online : </label>

                </div>
              </div>
              <!-- Các cổng thang toán -->

              <div class="row row align-items-start" style="padding: 10px 0px 10px;">
                <div class="col-4">
                  <a data-bs-toggle="modal" data-bs-target="#Modalbank"><img src="vnpay.png" alt="vnpay" class="imglogo" /></a>
                </div>

                <div class="col-4">
                  <a data-bs-toggle="modal" data-bs-target="#Modalzalo"><img src="zalopay.png" alt="zalopay" class="imglogo" /></a>
                </div>

                <div class="col-4">
                  <a data-bs-toggle="modal" data-bs-target="#Modalmomo"><img src="momo.png" alt="momo" class="imglogo" /></a>
                </div>
              </div>
              <!-- Các cổng thang toán -->

            </div>
            <!-- Modal vnpay -->
            <div class="modal fade" id="Modalbank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Quét QR bằng app ngân hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="vnpay-hd.jpg" alt="momo" class="img-thumbnail" />
                    <h6 class="text-center" style="color: blue;"> Nội dung chuyển tiền: <span> <b><?php echo $row->IDKH; ?></span></b> </h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <a href="vnpay-hd.jpg" download>
                      <button type="button" class="btn btn-primary">Lưu mã QR</button></a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <!-- Modal zalopay -->
            <div class="modal fade" id="Modalzalo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Quét QR bằng Zalo Pay</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="zalo-h.jpg" alt="momo" class="img-thumbnail" />
                    <h6 class="text-center" style="color: blue;"> Lời nhắn: <span> <b><?php echo $row->IDKH; ?></span></b> </h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <a href="zalo-h.jpg" download>
                      <button type="button" class="btn btn-primary">Lưu mã QR</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <!-- Modal zalopay -->
            <div class="modal fade" id="Modalmomo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Quét QR bằng MoMo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="momo-H.jpg" alt="momo" class="img-thumbnail" />
                    <h6 class="text-center" style="color: blue;"> Lời nhắn: <span> <b><?php echo $row->IDKH; ?></span></b> </h6>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <a href="momo-H.jpg" download>
                      <button type="button" class="btn btn-primary">Lưu mã QR</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
      </div>

  <?php
          } else {
            "";
          }
        }
  ?>
  <!-- Phần tổng tiền dư nợ tự query trực tiếp-->
  <?php
  if (isset($_GET["search"])) {
    $str = $_GET["search"];
    $sthdn = $con->prepare("SELECT IDKH, FORMAT(sum(`Số tiền còn lại`),0) as Duno FROM ghi_CS WHERE IDKH = '$str' GROUP BY IDKH ");
    $sthdn->setFetchMode(PDO::FETCH_OBJ);
    $sthdn->execute();

    if ($row = $sthdn->fetch()) {
  ?>
      <div class=" alert alert-success col-12">
        <div>
          <label> Tổng tiền dư nợ : </label><b> <span><?php echo $row->Duno; ?></span></b>

          <label>VNĐ</label>
        </div>
      </div>

  <?php
    } else {
      echo '<div class="alert alert-danger">
            Không tìm thấy số ID khách hàng này
            </div>
            ';
    }
  }
  ?>
  <!-- Phần tổng tiền dư nợ tự query trực tiếp-->




  <table id="dtBasicExample" class="table table-info table_docso table-striped table-bordered table-sm " cellspacing="0" width="100%">
    <thead class="table-primary ">
      <tr>
        <th class="th-sm">Kỳ
        </th>
        <th class="th-sm">CSM
        </th>
        <th class="th-sm">CSC
        </th>
        <th class="th-sm">Tiêu thụ
        </th>
        <th class="th-sm">Tiền nước
        </th>
        <th class="th-sm">Tiền thu
        </th>
      </tr>
    </thead>
    <?php
    if (isset($_GET['search'])) {
      $searchKey = $_GET['search'];

      $sql = "SELECT  ROW_NUMBER() OVER (Order by `Ngày ghi`) AS RowNumber, CSM, CSC,`Số khối` as Sokhoi, FORMAT(`Thành tiền`,0) as Thanhtien, FORMAT(`Số tiền nhận`,0) as Tiennhan, DATE_FORMAT(`Ngày ghi`, '%m-%Y') as Ky FROM ghi_CS WHERE IDKH = '$searchKey' ORDER BY RowNumber DESC ";
      // Cot ngay ghi co dau cach nen dung select `ngay ghi` order by `ngay ghi`, 2 loại có dấu khác nhau. còn ko có kc thì dùng ko dùng `1` đều được
      $result = $con->query($sql);
    ?>
      <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) : ?>
          <tr>
            <td><?php echo $row->Ky ?></td>
            <td><?php echo $row->CSM ?></td>
            <td><?php echo $row->CSC ?></td>
            <td><?php echo $row->Sokhoi ?></td>
            <!-- Dạng cột có dấu cách {''} -->
            <td><?php echo $row->Thanhtien ?></td>
            <td><?php echo $row->Tiennhan ?></td>

          </tr>
        <?php endwhile; ?>
      <?php
    } else {
      "";
    }
      ?>
      </tbody>
  </table>
    </div>



  </div>
  </div>
</body>


</html>