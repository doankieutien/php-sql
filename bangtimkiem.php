<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="frmcheck" id="frmcheck" action="xulycheckbox.php" method="GET">
        <input type="text" name="timkiem" id="timkiem"/><br/>
        
        <h1>Loại sản phẩm</h1>
        <input type="checkbox" name ="check[]" id="check-1" value="1">Máy tính bảng<br/>
        <input type="checkbox" name ="check[]" id="check-2" value="2">Máy tính xách tay<br/>
        <input type="checkbox" name ="check[]" id="check-3" value="3">Điện thoại<br/>
        <input type="checkbox" name ="check[]" id="check-4" value="4">Linh phụ kiện<br/>
        <h1>Khuyến mãi</h1>
        <input type="radio" name="rdkhuyenmai" id="rdkhuyenmai-1" value="1">Khuyến mãi trung thu<br/>
        <input type="radio" name="rdkhuyenmai" id="rdkhuyenmai-2" value="2">Khuyến mãi sinh nhật<br/>
        <input type="submit" name="btntimkiem" id="btntimkiem" value="Tìm kiếm"/><br/><br/>
    </form>
</body>
</html>