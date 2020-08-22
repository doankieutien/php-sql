<?php
$tendangnhap= $_POST['username'];
$matkhau =$_POST['password'];
$fullname = $_POST['fullname'];
echo '<ul>';
echo "<li> Tên của bạn là: {$fullname}</li>";
echo "<li> Tên đăng nhập của bạn là: {$tendangnhap}</li>";
echo "<li> Mật khẩu của bạn là: {$matkhau}</li>";
echo '</ul>';


?>