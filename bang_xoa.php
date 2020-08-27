<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xoa</title>
</head>
<body>
    <?php
    include_once(__DIR__ . '/../dbconnect.php');
    $sql= <<<EOT
    SELECT httt_ma , httt_ten FROM `hinhthucthanhtoan`;
EOT;
    $result = mysqli_query($conn, $sql);
    $data =[];
    while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = array(
            'httt_ma' => $row['httt_ma'],
            'httt_ten' => $row['httt_ten'],
        );
    }
    ?>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Mã Hình thức Thanh toán</th>
                <th>Tên Hình thức Thanh toán</th>
                <th>thao tac</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $httt): ?>
            <tr>
                <td><?= $httt['httt_ma']; ?></td>
                <td><?= $httt['httt_ten']; ?></td>
                <td>
                   <a href="xulyxoa.php?idmuonxoa=<?php echo $httt['httt_ma']; ?>">Xoa</a>
                   <a href="xulysua.php?idmuonsua=<?php echo $httt['httt_ma']; ?>">Sua</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>