<!DOCTYPE html>
<html>
<!-- http://localhost:8080/capnuoc/QR_K57.php?IDKH=1234 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.94">
  <title>Phiếu nước <?php echo $_GET["TenKH"] ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .k57 {
      font-family: Tahoma;
      /* head ko khai thì dùng 1 loại*/
      font-size: 12px;
      line-height: 0.48;
      /* độ giãn dòng*/
      width: 57.5mm;
      height: 140mm;
      /* width: 30mm;
      height: 35mm; */
      margin: 0.2mm;
      /* T-R-B-L height ra chieu dai in-sau canh giu bi zoom to hon giảm h lai*/
    }

    .rcorners {
      border-radius: 10px;
      border: 1.5px solid #000000;
      z-index: 0;
      padding: 2px;
      width: 22mm;
      height: 22mm;
    }

    .row {
      display: flex;
    }

    .column {
      flex: 50%;
      padding: 6px 12px;
    }

    /* kho giay */
    .container {
      display: flex;
      justify-content: center;
    }

    /* canh giua noi dung */
    .fa {
      border: none;
      text-align: center;
      color: blue;
      font-size: 36px;
      background-color: white;
      margin-top: 10px;
      width: 100%;
    }

    .fa:active {
      color: aqua;
    }



    #qr-code {
      display: flex;
    }

    /* an nut in */
    @media only print {
      .fa {
        visibility: hidden;


      }
    }
  </style>

</head>

<body onload="window.print()" onfocus="window.close()">

  <div class="container">
    <div class="k57">
      <div class="row">
        <div class="column">
          <div class="rcorners">
            <canvas id="qr-code" style="margin: 0px 2px -8px 2px; z-index: -1;"></canvas>
            <p align="center" style="margin-top: 5px; z-index: 99;"><b><?php echo $_GET["IDKH"] ?></b></p>
          </div>
        </div>
        <div class="column">
          <div class="rcorners">
            <canvas id="qr-code2" style="margin: 0px 2px -8px 2px; z-index: -1;"></canvas>
            <p align="center" style="margin-top: 5px; z-index: 99;"><b><?php echo $_GET["IDKH"] ?></b></p>
          </div>
        </div>
      </div>
      <button class=" fa fa-print" onclick="printpage()"></button>
      <script>
        function printpage() {
          window.print()
        }
      </script>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
  <!-- https://github.com/neocotic/qrious -->
  <script>
    var qr;
    (function() {
      qr = new QRious({
        element: document.getElementById('qr-code'),
        size: 80,
        level: 'H',
        value: '<?php echo $_GET["IDKH"] ?>'
      });
    })();
  </script>
  <script>
    var qr;
    (function() {
      qr = new QRious({
        element: document.getElementById('qr-code2'),
        size: 80,
        level: 'H',
        value: '<?php echo $_GET["IDKH"] ?>'
      });
    })();
  </script>
  </body>

</html>