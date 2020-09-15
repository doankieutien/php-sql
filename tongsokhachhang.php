<?php
include_once(__DIR__.'/../../dbconnect.php');
$sqlsoluongkhachhang = "select count(*) as SoLuong from `khachhang`";
$result = mysqli_query($conn, $sqlsoluongkhachhang);
$datasoluongkhachhang =[];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $datasoluongkhachhang[] = array(
        'SoLuong' => $row['SoLuong']
    );
}
echo json_encode($datasoluongkhachhang[0]);



?>