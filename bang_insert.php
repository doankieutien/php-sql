<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tao moi hinh thuc thanh toan</h1>
    <form name="frminsert" id="frminsert" method="POST" action="">
        <table>
            <tr>
                <td><input type="text" name="httt_ten" id="httt_ten" /> </td>
            </tr>
            <tr>
                <td><input type="submit" name="btnluu" id="btnluu" value="Luu du lieu"/></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['btnluu'])){
            include_once(__DIR__ . '/../dbconnect.php');
            $httt_ten = $_POST['httt_ten'];

            $sql= "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES (N'$httt_ten');";    
            mysqli_query($conn, $sql);
        }
        

    
    ?>
</body>
</html>