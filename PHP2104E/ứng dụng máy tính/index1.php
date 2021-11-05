<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máy tính</title>
</head>
<body>
    <form action="#" method="POST">
        Số thứ nhất <input type="number" name="nbOne"> <br>
        Phép toán   <input type="text" name="calcuLator"><br>
        Số thứ nhất <input type="number" name="nbTwo"><br>
        <button>Kết quả</button>
    </form>
    <div class="result">
    <?php 
        if (isset($_POST["nbOne"])&&isset($_POST["nbTwo"])&&isset($_POST["calcuLator"])) {
            $a = $_POST["nbOne"];
            $b = $_POST["nbTwo"];
            $kq ;
            $cal = $_POST["calcuLator"];
               switch($cal){
                case "." ;
                case "*" ;
                case "x" ;
                case "X" :
                    $kq= $a * $b;
                    echo $a . " * " . $b ." = ".$kq;
                    break;
                case ":" ;
                case "/"  :
                    $kq= $a / $b;
                    echo $a . " / " . $b ." = ".$kq;
                    break;
                case ":" ;
                case "/" :
                    $kq= $a / $b;
                    echo $a . " / " . $b ." = ".$kq;
                    break;
                case "+" :
                    $kq= $a + $b;
                    echo $a . " + " . $b ." = ".$kq;
                    break;
                case "-"  :
                    $kq= $a - $b;
                    echo $a . " - " . $b ." = ".$kq;
                    break;
                case "%" :
                    $kq= $a % $b;
                    echo $a . " % " . $b ." = ".$kq;
                    break;
                default :
                    echo "Phép toán không hợp lệ.Vui lòng dùng phép toán * / + -";
               }

        }
        ?>
    </div>
</body>
</html>