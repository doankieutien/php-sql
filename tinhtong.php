<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('PI', 3.14);
    echo 'So PI la: '.PI .'<br/>';
    
    $a =13;
    $b=4;
    $tong= $a +$b;
    $tich =$a * $b;
    $thuong =$a/$b;
    $hieu = $a-$b;
    $chiadu= $a % $b;
    $trungbinhcong=$tong/2;
    echo 'Tong la: '. $tong.'<br/>';
    echo 'Tich la: '. $tich.'<br/>';
    echo 'Thuong la: '. $thuong.'<br/>';
    echo 'Hieu la: '. $hieu.'<br/>';
    echo 'So du khi chia a cho b: '. $chiadu .'<br/>';
    echo 'số nguyên của phép chia a cho b: '. (int)$thuong.'<br/>';
    echo 'Trung bình cộng: '. $trungbinhcong.'<br/>';

    
    ?>
</body>
</html>