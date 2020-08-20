<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng</title>
    <style>
    .dongchan {
        background: red;
    }
    
    </style>
</head>
<body>
    <?php
    echo '<table border= "1">';
        for($i=0;$i<5;$i++){
           
            echo '<tr>';
            for($j=0; $j<6;$j++){
                echo '<td>';
                echo "Dòng {$i} cột {$j}";
                echo '</td>';
            }
            echo '</tr>';
        }

    echo '</table>';
    
    ?>
</body>
</html>