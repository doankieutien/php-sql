<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>
    <?php
    include_once(__DIR__ . '/../dbconnect.php');
    $httt_ma = 1;
    $httt_ten = 'Tien mat';
    $sql = <<<EOT
    UPDATE `hinhthucthanhtoan`
    SET
        httt_ten='$httt_ten'
    WHERE httt_ma=$httt_ma
EOT;
    // 3. Yêu cầu PHP thực thi QUERY
    mysqli_query($conn, $sql);

    ?>
    
</body>
</html>