<?php
include_once(__DIR__.'/../../dbconnect.php');
$sqlsoluongmathang = "select count(*) as SoLuong from `sanpham`";
$result = mysqli_query($conn, $sqlsoluongmathang);
$datasoluongmathang =[];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $datasoluongmathang[] = array(
        'SoLuong' => $row['SoLuong']
    );
}
echo json_encode($datasoluongmathang[0]);



?>