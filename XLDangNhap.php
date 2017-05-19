<?php
/* $name = $_POST['user'];
  $pass = $_POST['pass'];
  $conn = new PDO('mysql:host=localhost;dbname=products', 'root', 'root');
  $sql = "select * from user where email  = '$name' and password = '$pass' ";
  $kq = $conn->query($sql)->rowCount();


  if ($kq == 1) {
  //header('location:Dangky.php');
  exit();
  } else {
  // echo"<script>alert('ten dang nhập or mk không đúng')</script>";
  }
  ?>

  <?php */

try {
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    //tao lien ket
    $db = new PDO('mysql:host=localhost;dbname=Products', 'root', 'root');
    //lay du lieu
    $sql = "select * from user where email  = '$name' and password = '$pass' ";
    // $sql = 'select * FROM `user`';
    $kq = $db->query($sql);
    $kk = $db->query($sql)->rowCount();
    if ($kk == 1) {

        while ($r = $kq->fetch(PDO::FETCH_NUM)) {
            if ($r[3] == '1') {
                header("location:admin.php");
            } else if ($r[3] == '2') {
                header("location:BoPhanXacThuc.php");
            } else if ($r[3] == '3') {
                header("location:BoPhanXetDuyet.php");
            } else if ($r[3] == '4') {
                header("location:BoPhanLuuTru.php");
            } else {
                
            }

//        if ($r[3] == '1') {
//            header("location:admin.php");
//        }
//        else {
//            header("location:dangky.php");
//        }
        }
    } else {



        echo'  <script>
            confirm("Sai Tai Khoan Hoac Mat khau...");
location.assign("index.php");
    </script>';
//        exit();
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>
<!--$kq = $conn->query($sql)->rowCount();
if ($kq == 1)
    header('location:customer.php');
else {
    echo 'Sai Ten Dang Nhap Hoac Mat Khau!';
}-->;