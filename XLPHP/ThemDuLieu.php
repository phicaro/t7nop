<?php
$hoten=$_GET['tname'];
$diachi=$_GET['tdiachi'];
$gioitinh=$_GET['tgioitinh'];
$socmnd=$_GET['tcmnd'];
$sodt=$_GET['tdienthoai'];
$email=$_GET['temail'];
$cmd="INSERT INTO `dangky`(`hoten`, `diachi`, `gioitinh`, `socmnd`, `sodienthoai`, `email`) VALUES ('$hoten','$diachi','$gioitinh','$socmnd','$sodt','$email')";
$db=new PDO('mysql:host=localhost;dbname=products','root','root');
$kt=$db->exec($cmd);
?>