<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form đăng ký</h1>
    <form name="frmdangky" id="frmdangky" action="xulydangky.php" method="POST">
        Tên đăng nhập: <input type="text" name="username" id="username"/>
        Mật khẩu: <input type="text" name="password" id="password"/><br/>
        Họ và tên: <input type="text" name="fullname" id="fullname"/><br/>
        <input type="submit" name="dangky" id="dangky" value="Đăng ký"/>
    
    </form>
</body>
</html>