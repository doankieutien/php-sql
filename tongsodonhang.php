<?php
include_once(__DIR__.'/../../dbconnect.php');
$sqlsoluongdonhang = "select count(*) as SoLuong from `dondathang`";
$result = mysqli_query($conn, $sqlsoluongdonhang);
$datasoluongdonhang =[];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $datasoluongdonhang[] = array(
        'SoLuong' => $row['SoLuong']
    );
}
echo json_encode($datasoluongdonhang[0]);



?>