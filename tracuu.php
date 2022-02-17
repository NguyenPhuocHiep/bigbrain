<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tra cứu lịch sử dùng nước</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    .info_label {
      background: url(http://capnuoctrungan.vn/Images/tawaco/icon/arrow.png) left 3px bottom 5px no-repeat;
      padding-left: 10px;
      padding-top: 5px;
    }

    /* .info_label label {
      font-weight: bold;
    } */

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
  </style>
</head>

<body>
  <div class="container">
    <div class="col-12">
      <form class="row row-cols-lg-auto g-2 align-items-center" method="GET">
        <!-- có thể thay GET toàn bộ thành POST chậm nhưng bảo mật hơn -->
        <div class="col-12">
          <div>
            <input type="text" class="form-control" name="search" placeholder="Nhập số IDKH trong phiếu nước hoặc chọn tìm số điện thoại">
          </div>
        </div>
        <div class="col-12">
          <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
            <label>
              Tìm bằng số điện thoại
            </label>
          </div> -->
        </div>
        <div class="col-12">
          <button class="btn btn-primary">Tìm kiếm</button>
        </div>
      </form>
      <div class="row row-cols-lg-auto g-2 align-items-center" style="margin-top: 3px;">

        <?php
        $con = new PDO('mysql:host=sql6.freemysqlhosting.net:3306; dbname=sql6473283; charset=utf8', 'sql6473283', 'tMZx8Dla5Y');

        // $con = new PDO("mysql:host=localhost;dbname=data_kh", 'root', '');
        // $con = new PDO("mysql:host=localhost;dbname=test", 'root', '');

        // tạo kết nối có mã utf-8 để tránh lỗi font

        if (isset($_GET["search"])) {
          $str = $_GET["search"];
          $sth = $con->prepare("SELECT * FROM `data_kh` WHERE IDKH = '$str'");

          $sth->setFetchMode(PDO::FETCH_OBJ);
          $sth->execute();

          if ($row = $sth->fetch()) {
        ?>

            <div class="col-12">
              <div class="info_label col-12">
                <label> Số định danh IDKH : </label><b> <span><?php echo $row->IDKH; ?></span></b>
              </div>
              <div class="info_label col-12">
                <label> Tên Khách Hàng : </label><b> <span><?php echo $row->TenKH; ?></span></b>
              </div>
              <div class="info_label col-12">
                <div>
                  <label> Số điện thoại : </label><b> <span><?php echo $row->Phone; ?></span></b>
                </div>
              </div>
              <div class="info_label col-12">
                <div>
                  <label> Địa chỉ : </label><b> <span><?php echo $row->Diachi; ?></span></b>
                </div>
              </div>
              <div class=" alert alert-success col-12">
                <div>
                  <label> Tổng tiền dư nợ : </label><b> <span><?php echo $row->Duno; ?></span></b> <label>VNĐ</label>
                </div>
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
            $sql = "SELECT * FROM ghi_cs WHERE IDKH = '$searchKey' ORDER BY Ky DESC ";
            $result = $con->query($sql);
          ?>
            <tbody>
              <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) : ?>
                <tr>
                  <td><?php echo $row->Ky ?></td>
                  <td><?php echo $row->CSM ?></td>
                  <td><?php echo $row->CSC ?></td>
                  <td><?php echo $row->Sokhoi ?></td>
                  <td><?php echo $row->Tiennuoc ?></td>
                  <td><?php echo $row->Tiennhan ?></td>
                </tr>
              <?php endwhile; ?>
            <?php
          } else {
            "";
          }
            ?>
        </table>
      </div>
    </div>
</body>


</html>