<?php
$taikhoan=$_POST['taikhoan'];
$matkhau=$_POST['matkhau'];
require_once 'ketnoi.php';
$sql="SELECT * FROM taikhoan1 WHERE taikhoan='$taikhoan'  and matkhau='$matkhau'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0){
    header("location:admin.html");
}else{
    echo'<h1>đăng nhập sai thông tin </h1>';
}


?>