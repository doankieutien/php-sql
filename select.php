<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>select</title>
</head>
<body>
    <?php
    include_one(__DIR__ . '/../dbconnect.php');
    $sql= <<<EOT
    SELECT httt_ma , httt_ten FROM `hinhthucthanhtoan`;
EOT;
    $result = mysqli_query($conn, $sql);
    $data =[];
    while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] =array(
            'ma' => $row['httt_ma'];
            'ten' => $row['httt_ten'];
        )
    }
    ?>
</body>
</html>