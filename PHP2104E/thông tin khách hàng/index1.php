<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tìm kiếm thông tin</title>
</head>
<body>
    <form action="#" method="POST">
        Nhập họ tên  <input type="text" name="name"> <br>
        <button>Tìm kiếm</button>
        <pre>(nhập chữ cái viết tắt của tên)</pre>
    </form>
    <div class="result">
    <?php 
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            $customer = array(
                "NVA"=>" NGUYỄN VĂN A  , 15 , 0392301355 ",
                "MTA"=>" NG V A , 15 , 0392301355 ",
                "PKT "=>"  NGUỄN V A , 15 , 0392301355 ",
                "NVB "=>"  NGUYỄN VĂN A , 15 , 0392301355 ",
                "NVC "=>"  NUYN VĂN A , 15 , 0392301355 ",
                "NVD "=>"  NGUYỄNVĂN A , 15 , 0392301355 ",
                "NVE "=>" NGYỄN VĂN A , 15 , 0392301355 ",
                "PKL "=>"  NGUYỄVĂA , 15 , 0392301355 ",
                "NNKN "=>"  NGUYỄNN A , 15 , 0392301355 ",
                "PHT "=>" NGN VĂN A , 15 , 0392301355 "
            );
                foreach($customer as $key => $value){
                    if($key==$name){
                        $hienThi= "<table><tr><td>Tên</td><td>Thông tin</td></tr><tr><td>". $key ."</td><td>" . $value ."</td></tr></table>";
                    }
                }
                echo $hienThi;
            
        }
        ?>
    </div>
</body>
</html>