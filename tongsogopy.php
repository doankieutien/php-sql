<?php
include_once(__DIR__.'/../../dbconnect.php');
$sqlsoluonggopy = "select count(*) as SoLuong from `gopy`";
$result = mysqli_query($conn, $sqlsoluonggopy);
$datasoluonggopy =[];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $datasoluonggopy[] = array(
        'SoLuong' => $row['SoLuong']
    );
}
echo json_encode($datasoluonggopy[0]);



?>