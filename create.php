<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
     include_once(__DIR__ .'/../layouts/styles.php');
    
    ?>
    <?php
     include_once(__DIR__ .'/../layouts/partials/header.php');
    
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-2">
        <?php
    include_once(__DIR__ .'/../layouts/partials/sidebar.php');
    ?>
        </div>
        <div class="col-md-8">
       
        <h1>Tao moi hinh thuc thanh toan</h1>
    <form name="frminsert" id="frminsert" method="POST" action="">
        <table>
            <tr>

                <td>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ten hinh thuc thanh toan</label>
                    <input type="text" name="httt_ten" id="httt_ten" />
                    
  </div>
                 </td>
            </tr>
            <tr>
                <td><input type="submit" name="btnluu" id="btnluu" value="Luu du lieu"/></td>
            </tr>
            <tr>
                <td> <a class="btn btn-primary" href="index.php" role="button">quay ve trang chu</a></td>
            </tr>
        </table>
    </form>

    <?php
    include_once(__DIR__. '/../../dbconnect.php');
    if(isset($_POST['httt_ten'])){
        $httt_ten= $_POST['httt_ten'];
        $errors=[];

        if(empty($httt_ten)){
            $errors['httt_ten'][] =[
                'rule' => 'required',
                'rule_value' => true,
                'value' => $httt_ten,
                'msg' => 'Vui long nhap ten hinh thuc thanh toan'

            ];
        }
        //minlength 3
        if(!empty($httt_ten) && strlen($httt_ten) < 3) {
            $errors['httt_ten'][] =[
            'rule' => 'minlength',
                'rule_value' => 3,
                'value' => $httt_ten,
                'msg' => 'Ten hinh thuc thanh toan phải có ít nhất 3 ký tự'
            ];
        }
        //maxlength
        if(!empty($httt_ten) && strlen($httt_ten) > 50) {
            $errors['httt_ten'][] =[
            'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $httt_ten,
                'msg' => 'Ten hinh thuc thanh toan không được vượt quá 50 ký tự'
            ];
        }
        print_r($errors);die;
    }?>
   


    <?php
        if(isset($_POST['btnluu'])){
            include_once(__DIR__ . '/../dbconnect.php');
            $httt_ten = $_POST['httt_ten'];

            $sql= "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES (N'$httt_ten');";    
            mysqli_query($conn, $sql);
        }
        

    
    ?>
        </div>
    </div>
    
    </div>
    
    <?php
    include_once(__DIR__ .'/../layouts/partials/sidebar.php');
    ?>
    <?php
    include_once(__DIR__ .'/../layouts/partials/footer.php');
    ?>
    <?php
    include_once(__DIR__ .'/../layouts/scripts.php');
    ?>
    <script>
    $(document).ready(function() {
      $("#frminsert").validate({
        rules: {
            httt_ten: {
            required: true,
            minlength: 3,
            maxlength: 50
          },
          
        },
        messages: {
            httt_ten: {
            required: "Vui lòng nhập ten hinh thuc thanh toan",
            minlength: "Ten hinh thuc thanh toan phải có ít nhất 3 ký tự",
            maxlength: "Ten hinh thuc thanh toan không được vượt quá 50 ký tự"
          },
        
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
          // Thêm class `invalid-feedback` cho field đang có lỗi
          error.addClass("invalid-feedback");
          if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
          } else {
            error.insertAfter(element);
          }
        },
        success: function(label, element) {},
        highlight: function(element, errorClass, validClass) {
          $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).addClass("is-valid").removeClass("is-invalid");
        }
      });
    });
  </script>

</body>
</html>